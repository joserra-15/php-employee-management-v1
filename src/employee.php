<!-- TODO Employee view -->
<?php

session_start();

if (isset($_SESSION["userId"])) {
  require("./library/sessionHelper.php");
} else {
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
  <title>Employee</title>
</head>

<body>
  <?php
  include("../assets/html/header.html");
  ?>

  <section class="wrapper">
    <form action="./library/employeeController.php" method="POST">
      <input type="hidden" name="_method" value="<?= isset($employee) ? "PUT" : "POST" ?>">

      <?php require('imageGallery.php'); ?>

      <img src="<?= isset($employee['avatar']) ? $employee['avatar'] : "../assets/images/no-user.png" ?>" class="img_profile" alt="avatar">

      <label for="name">Name: <input type="text" id="name" name="name" value="<?= isset($employee) ? $employee['name'] : ''; ?>"></label>
      <label for="lastName">Last Name:<input type="text" id="lastName" name="lastName" value="<?= isset($employee) ? $employee['lastName'] : ''; ?>"></label>
      <label for="email">Email:<input type="email" id="email" name="email" value="<?= isset($employee) ? $employee['email'] : ''; ?>"></label>
      <label for="uGender" class="form-label">Gender: </label><br>
      <select class="form-control" id="uGender" name="gender" required>
        <option value="man" <?= isset($employee) ? ($employee['gender'] == "man" ? "selected" : "") : '' ?>>Man</option>
        <option value="woman" <?= isset($employee) ? ($employee['gender'] == "woman" ? "selected" : "") : '' ?>>Woman</option>
        <option value="nobinary" <?= isset($employee) ? ($employee['gender'] == "nobinary" ? "selected" : "") : '' ?>>No binary</option>
      </select>
      <label for="city">City: <input type="text" id="city" name="city" value="<?= isset($employee) ? $employee['city'] : ''; ?>"></label>
      <label for="streetAddress">Street Address: <input type="text" id="streetAddress" name="streetAddress" value="<?= isset($employee) ? $employee['streetAddress'] : ''; ?>"></label>
      <label for="state">State: <input type="text" id="state" name="state" value="<?= isset($employee) ? $employee['state'] : ''; ?>"></label>
      <label for="age">Age: <input type="number" id="age" name="age" value="<?= isset($employee) ? $employee['age'] : ''; ?>"></label>
      <label for="postalCode">Postal Code: <input type="number" id="postalCode" name="postalCode" value="<?= isset($employee) ? $employee['postalCode'] : ''; ?>"></label>
      <label for="phoneNumber">Phone Number: <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" id="phoneNumber" name="phoneNumber" value="<?= isset($employee) ? $employee['phoneNumber'] : ''; ?>" required></label>
      <input type="hidden" name="id" value="<?= isset($employee) ? $employee['id'] : ''; ?>">
      <input type="submit" value="<?= isset($employee) ? "Update" : "Create" ?>" name="employeePage">
      <a href="dashboard.php">Return</a>
    </form>
  </section>

  <?php
  include("../assets/html/footer.html");
  ?>
  <script>
    $('#dashboardButton').addClass('text-muted');
    $('#employeeButton').addClass('font-weight-bold');
  </script>
</body>

</html>