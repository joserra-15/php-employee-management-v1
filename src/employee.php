<!-- TODO Employee view -->
<?php

session_start();

if (isset($_SESSION["userId"])){
  require("./library/sessionHelper.php");
}else{
  header("Refresh: 0; URL=../index.php?error=You are not logged in");
  exit();
}

require("./library/employeeController.php");

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
  ?>

  <section class="wrapper">
    <form action="">
      <label for="name"><input type="text" id="name" name="name" value="<?= isset($employee)?$employee['name']:'';?>"></label>
      <label for="lastName"><input type="text" id="lastName" name="lastName" value="<?php echo isset($employee)?$employee['lastName']:'';?>"></label>
      <label for="email"><input type="text" id="email" name="email" value="<?php echo isset($employee)?$employee['email']:'';?>"></label>
      <label for="gender"><input type="text" id="gender" name="gender" value="<?php echo isset($employee)?$employee['gender']:'';?>"></label>
      <label for="city"><input type="text" id="city" name="city" value="<?php echo isset($employee)?$employee['city']:'';?>"></label>
      <label for="streetAddress"><input type="text" id="streetAddress" name="streetAddress" value="<?php echo isset($employee)?$employee['streetAddress']:'';?>"></label>
      <label for="state"><input type="text" id="state" name="state" value="<?php echo isset($employee)?$employee['state']:'';?>"></label>
      <label for="age"><input type="text" id="age" name="age" value="<?php echo isset($employee)?$employee['age']:'';?>"></label>
      <label for="postalCode"><input type="text" id="postalCode" name="postalCode" value="<?php echo isset($employee)?$employee['postalCode']:'';?>"></label>
      <label for="phoneNumber"><input type="text" id="phoneNumber" name="phoneNumber" value="<?php echo isset($employee)?$employee['phoneNumber']:'';?>"></label>
    </form>
  </section>

  <?php
    include("../assets/html/footer.html");
  ?>

</body>
</html>