<?php
$subsql = "SELECT * FROM  `subscription` WHERE member_id = '$member_id' && email =  '$member_email'";
$subresults = mysql_query($subsql,$connection) or die(mysql_error());
$subrow = mysql_fetch_assoc($subresults);

$plan =  $subrow['plan'];
$starting_date = $subrow['start_date'];
$ending_date = $subrow['end_date'];

$today = date("Y-m-d");



if ($starting_date == ''){$status =  ""; $plan = "";} else if($today < $ending_date){ $status =  "active"; }else if ($today >= $ending_date){$status =  "expired";}
?>
<div class="w-100 p-2 text-center" style="background-color: #003;color: #fff; font-size: 12px; line-height: 36px;">
  MY US ADDRESS
</div>
<div class="pl-4 py-3 member-background">
  Postal Address <br>
  <?= $firstname ?> <?=$lastname ?> <br />
  7734, Bridgestone Drive, <br />
  Suite <?= $uuid ?>, <br />
  Orlando, Florida, <br />
  32835, <br />
  USA

  <br><br>
  Phone No.<br>
  +1.4075329292 <br>
</div>
<div class="w-100 p-2 text-center" style="background-color: #003;color: #fff; font-size: 12px; line-height: 36px;">
  MY SUBSCRIPTION
</div>
<div class="py-4 text-center member-background" style="flex: 1 1 100%">
  <?php if ($status): ?>
    <div class="member_panel_left_inner_title" style="margin-top:15px;">
        Plan : Basic <br>
        Status :
        <?php if($status == "active"): ?>
          <span class="badge badge-success">Active</span>
        <?php else: ?>
          <span class="badge badge-success">Renew</span>
        <?php endif; ?>
    </div>
  <?php else: ?>
    <a href="/pricing1.php" style="color: #000"><u>Purchase a Subscription Plan</u></a>
  <?php endif; ?>
</div>
