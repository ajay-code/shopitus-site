<?php
session_start();
include '../../config.php';
$plan = false;
$_SESSION['plan'] = $_POST['plan'];
$_SESSION['cycle'] = $_POST['cycle'];
$_SESSION['charges'] = $_POST['charges'];
$member_id = $_SESSION['member_id'];
$sql = "SELECT * FROM  `members` WHERE id = {$member_id}";
$results = mysql_query($sql, $connection) or die(mysql_error());
$user = mysql_fetch_assoc($results);
if (hasSubscription($user['id'])) {
    $query = "SELECT * from `subscription` WHERE `member_id`={$user['id']}";
    $results = mysql_query($query, $connection);
    $subscription = mysql_fetch_assoc($results);
    if (isset($subscription['agreement_id']) && $subscription['agreement_id']) {
        header('LOCATION: updateUserPlan.php');
    } else {
        header('LOCATION: setUserPlan.php');
    }
} else {
    header('LOCATION: setUserPlan.php');
}
