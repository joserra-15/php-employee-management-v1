<?php

if (isset($_SESSION['userId'])) {
  if (time() - $_SESSION['time'] > $_SESSION['lifeTime']) {
    logout("You runned out of time, log in again please");
  }
}