<?php
session_start();
include '../../config.php';
$member_id = $_SESSION['member_id'];

if ($member_id) {
    $user = getUser($member_id);
    unset($user['password']);
    echo json_encode($user);
} else {
    echo json_encode(false);
}
