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
</head>
<body>
  <?php
    include("../assets/html/header.html");
    include("../assets/html/footer.html");
  ?>

<section>

</section>

</body>
</html>