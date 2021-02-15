<?php

if (time() - $_SESSION['time'] > $_SESSION['lifeTime']) {
  require('loginManager.php');
  logout("You runned out of time, log in again please");
}
