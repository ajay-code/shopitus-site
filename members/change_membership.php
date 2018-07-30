<?php
session_start();
include "../config.php";

if (($_SESSION['memberpass'] != "valid")) {
    header("Location: ../login.php");
    die();
} else {
    $memberemail = $_SESSION['emailadrs'] ;
    $memberpass = $_SESSION['password'];

    $sql = "SELECT * FROM  `members` WHERE email = '$memberemail' && password = '$memberpass'";
    $results = mysql_query($sql, $connection) or die(mysql_error());
    $user = mysql_fetch_assoc($results);

    $query = "UPDATE `members` SET `plan`= {$_POST['plan']}, `cycle`='{$_POST['cycle']}',`membership_charges`='{$_POST['membership_charges']}',`charges`='{$_POST['charges']}',`total_charges`= '{$_POST['total_charges']}' WHERE `id`={$user['id']}";

    $results = mysql_query($query, $connection);
    if ($results) {
        header('location: edit_account.php');
    } else {
        header('location: edit_account.php');
    }
}
