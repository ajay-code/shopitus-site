<?php

function isLoggedIn(){
  if(isset($_SESSION['member_id'])){
    return true;
  }
  return false;
}

function redirectIfNotsignedIn(){
  if(!isLoggedIn()){
    header("Location: /login.php?login=false");
    die();
  }
}
