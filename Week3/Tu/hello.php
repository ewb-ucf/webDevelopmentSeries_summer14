<?php 
    // Welcome to PHP

    // remember to include header.php on every page where you need it
    require('header.php');
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
          <h2>Hello, <?= $_GET['q']; ?></h2>
        </span>    

    </div>
    <?php require('footer.php'); ?>
</body>
</html>