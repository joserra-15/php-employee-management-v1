<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body class="text-center h-100 d-flex justify-content-end">
    <?php

    if (isset($_GET["error"])) {
        echo "<div class='toast position-absolute d-flex justify-content-center m-3'><p class='toast-body'>" . $_GET['error'] . "</p></div>";
    }

    ?>
    <main class='form-signin d-flex justify-content-center w-100 h-100 align-items-center'>
        <form class="form" action="./src/library/loginController.php" method="POST">
            <label class="form-group row mt-2" for="email" class="visually-hidden">Email:</label>
            <input id="email" type="email" class="form-control" name="email" value="admin@assemblerschool.com" require>
            <label class="form-group row mt-2" for="password" class="visually-hidden">Password:</label>
            <input id="password" type="password" class="form-control" name="password" value="123456" require>
            <input class="w-100 btn btn-lg btn-primary mt-2" type="submit" value="log in">
        </form>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <script>
        $(".toast").toast({
            delay: 3000
        });
        $(".toast").toast('show');
    </script>
</body>

</html>