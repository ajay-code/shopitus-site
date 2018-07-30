<?php
session_start();

  $_SESSION['memberpass'] = null;
   unset($_SESSION['memberpass']);
      session_destroy(); 

 header('Location: index.php');



?>