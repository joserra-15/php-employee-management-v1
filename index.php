<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee management</title>
    
</head>
<body>
    <?php

        if (isset($_GET["error"])){
            echo "<p>".$_GET['error']."</p>";
        }

    ?>
    <form class="form" action="./src/library/loginController.php" method="POST">
    <label class="form-group row" for="email">Email:
        <input id="email" type="email" name="email" require>
    </label>
    <label class="form-group row" for="password">Password:
        <input id="password" type="password" name="password" require>
    </label>
    <input type="submit" value="log in">
    </form>
</body>
</html>