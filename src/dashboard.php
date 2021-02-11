<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->

<?php

session_start();

if (isset($_SESSION["userId"])){
  require("./library/sessionHelper.php");
}else{
  header("Refresh: 0; URL=../index.php?error=You are not logged in");
  exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />

</head>
<body>
  <?php
    include("../assets/html/header.html");
    include("../assets/html/footer.html");
  ?>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
  <script src="../assets/js/index.js"></script>

</body>
</html>