<?php 
    // Welcome to PHP

    // php can include other files to factor out or modularize your code
    // Now everything from header.php, including variables and functions
    // can be used on this page. (i.e. the $name variable)
    require('./templates/header.php');

    // the following will do the same thing as require:
    // require_once('header.php');
    // include('header.php');
?>

<!DOCTYPE html>
 
<html>
<head>
    <?= $ubuntu_font; ?>
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <title><?= $name; ?></title>
</head>

<body>
    <div>
        <?php require('./templates/nav.php'); ?>
        <span>
            <h2>Sign Up</h2>
            <form action="./signup.php" method="post">
                <input type="text" name="first_name" placeholder="First name..." size="25">
                <input type="text" name="last_name" placeholder="Last name..." size="25">
                <br>
                <input type="email" name="email" placeholder="Email address..." size="30">
                <input type="submit" value="Sign Up" class="btn">
            </form>
        </span>        
    </div>
    <?php require('./templates/footer.php'); ?>
</body>
</html>