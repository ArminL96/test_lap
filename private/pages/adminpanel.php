<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/test/test_lap/">
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/scss/_custom.scss" rel="stylesheet">
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <?php 
        require_once('../php/includes.php');
        require_once('../partials/header.php'); 
    ?>

    <div class="container-fluid main-content">

        <?php
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["is_admin"] === true) {
        ?>

        <?php
            require_once('../forms/pc_form.php');
        ?>
        
        <?php
            }

            else {
        ?>
            <h2>Error</h2>
            <span>Only admins have access to the admin panel!</span>
        <?php 
            }
        ?>

    </div>

    <?php require_once('../partials/footer.php'); ?>
</body>
</html>
