<?php

session_start();
if (isset($_SESSION['userId'])) {
  if (time() - $_SESSION['time'] > $_SESSION['lifeTime']) {
    logout("You runned out of time, log in again please");

  }
} else {
}


function logout($message){
  session_start();
  session_destroy();

  header("Refresh: 0; URL=../../index.php".$message? "?error=$message" : "");
  exit();
}