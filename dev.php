<?php
require "config.php";

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

 echo generate_uuid();
