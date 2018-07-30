<?php
session_start();
include("../config.php");
// include("../external_links.php");
function generate_uuid()
{
    global $connection;
    $unique = false;
    while (!$unique) {
        $uuid = sprintf(
                    '%03d-%03d',
                  mt_rand(0, 999),
                  mt_rand(0, 999)
                );
        $query = "select * from members where uuid='{$uuid}'";
        $results  = mysql_query($query, $connection);

        if (mysql_num_rows($results) <= 0) {
            $unique = true;
        }
    }
    return $uuid;
}

if (!$_POST['membershipconfirm'] == "asdi%7we") {
    $_SESSION['memberpass'] = "";
    header("Location: ../login.php?login=false");
    die();
} else {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['emailbox'];
    $password = $_POST['passwordbox'];
    $date = date('Y-m-d H:i:s');
	$uuid = generate_uuid();



    $newmemsql = "INSERT INTO members(id, uuid, first_name, last_name, address, city, state, zip, country, email, password, date_joined, telephone, mobile) VALUES(NULL, '$uuid', '$first_name', '$last_name', '', '', '', '', '', '$email', '$password', '$date', '0', '0')";
    mysql_query($newmemsql, $connection) or die(mysql_error());

    $_SESSION['emailadrs'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['memberpass'] = "valid"; // validate 'memberpass' session variable.
    $_SESSION['member_id'] = mysql_insert_id();

    header("Location: edit_account.php");
    die();
}
