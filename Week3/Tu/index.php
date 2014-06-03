<?php 
    // Welcome to PHP

    // php can include other files to factor out or modularize your code
    // Now everything from header.php, including variables and functions
    // can be used on this page. (i.e. the $name variable)
    require('header.php');

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
        <?php require('nav.php'); ?>
        <span>
            <h2>What is your name?</h2>
            <form action="hello.php" method="get">
                <input type="text" name="q" size="25">
                <input type="submit" value="Submit" class="btn">
            </form>
        </span>        
    </div>
    <?php require('footer.php'); ?>
</body>
</html>