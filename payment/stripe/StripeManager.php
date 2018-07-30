<?php 

use Stripe\Customer;
use Stripe\Subscription;

class StripeManager
{
    /**
     * Set Membership For the User
     */
    public static function setMembership($member_id, $plan = null, $cycle = null, $token)
    {
        $stripPlans = require("plans/plans.php");
        $user = static::getUser($member_id);
        $stripePlan = $stripPlans["{$plan}_{$cycle}"];
        $customer = Customer::create([
          'source'   => $token,
          'email'    => $user['email'],
          'plan'     => $stripePlan['id'],
          'account_balance' => $stripePlan['membership_fee'],
          'description' => "Charge with one time setup fee"
        ]);

        // save customer id to the tables
        $stripe_cus_id = $customer->id;

        $query = "UPDATE members set `stripe_cus_id` = '{$stripe_cus_id}' where id = {$member_id}";
        executeQuery($query);
        if (hasSubscription($member_id)) {
            if (isset($customer->subscriptions->data[0])) {
                $subscription = $customer->subscriptions->data[0];
                $charges = min_precision($stripePlan['fee'] / 100);
                $query = "UPDATE `subscription` SET `plan`= '{$plan}', `cycle`='{$cycle}', `method` = 'stripe', `agreement_id` = '', `stripe_subscription_id` = '{$subscription->id}', `charges` = '{$charges}' WHERE `member_id`={$user['id']}";
                executeQuery($query);
            }
        } else {
            if (isset($customer->subscriptions->data[0])) {
                $subscription = $customer->subscriptions->data[0];
                $charges = min_precision($stripePlan['total_fee'] / 100);
                $query = "INSERT INTO `subscription` SET `plan`= '{$plan}', `cycle`='{$cycle}', `method` = 'stripe', `agreement_id` = '', `stripe_subscription_id` = '{$subscription->id}', `charges` = '{$charges}', `member_id`={$user['id']}, `email` = '{$user['email']}'";
                executeQuery($query);
            }
        }
        var_dump($customer);
    }

    /**
     * Update user membership
     */
    public static function updateMembership($member_id, $plan = null, $cycle = null, $token)
    {
        // create new membership for given customer
        $stripPlans = require("plans/plans.php");
        $user = static::getUser($member_id);
        $stripePlan = $stripPlans["{$plan}_{$cycle}"];
        $cus_id = $user['stripe_cus_id'];
        $customer = Customer::retrieve($cus_id);
        $customer->source = $token;
        $customer->account_balance = (int) $stripePlan['membership_fee'];
        $customer->plan = $stripePlan['id'];
        $customer->save();
        if (isset($customer->subscriptions->data[0])) {
            $subscription = $customer->subscriptions->data[0];
            $charges = min_precision($stripePlan['fee'] / 100);
            $query = "UPDATE `subscription` SET `plan`= '{$plan}', `cycle`='{$cycle}', `method` = 'stripe', `agreement_id` = '', `stripe_subscription_id` = '{$subscription->id}', `charges` = '{$charges}' WHERE `member_id`={$user['id']}";
            executeQuery($query);
        }
        var_dump($customer);
    }

    

    

    /**
     * Cancel the given membership
     */
    public static function cancelMembership($subscription_id)
    {
        $subscription = Subscription::retrieve($subscription_id);
        $subscription->cancel();
        var_dump($subscription);
    }

    /**
     * Cancel All the memberships of the customer
     */
    public static function cancelAllMembershipsOfCustomer($member_id)
    {
        $cus_id = static::getCustomerId($member_id);
        if ($cus_id) {
            $customer = Customer::retrieve($cus_id);
            foreach ($customer->subscriptions->data as $subscription) {
                $subscription->cancel();
            }
        }
    }


    /**
     * Helper functions
     */

    /**
     * Get the data of member
     */
    public static function getUser($member_id)
    {
        $sql = "SELECT * FROM  `members` WHERE id = $member_id";
        $user = getSingleQueryResult($sql);
        return $user;
    }
    /**
     * Get the stripe customer ID of member
     */
    public static function getCustomerId($member_id)
    {
        $user = static::getUser($member_id);
        if ($user['stripe_cus_id']) {
            return $user['stripe_cus_id'];
        }
        return null;
    }

    /**
     * Get User From Stripe Cus Id
     */
    public static function getUserFromStripeCusId($customer_id)
    {
        $query = "SELECT * from members where stripe_cus_id = '{$customer_id}'";
        return getSingleQueryResult($query);
    }

     
    /**
     * Get User From Stripe Cus Id
     */
    public static function updateSubscriptionDates($stripe_subscription_id, $start, $end)
    {
        if ($start instanceof \Carbon\Carbon) {
            $start = $start->toDateString();
        }
        if ($end instanceof \Carbon\Carbon) {
            $end = $end->toDateString();
        }
        $query = "UPDATE subscription SET `start_date` = '{$start}', `end_date` = '{$end}' where stripe_subscription_id = '{$stripe_subscription_id}'";
        executeQuery($query);
    }
}
