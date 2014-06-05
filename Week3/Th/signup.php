<?php 
    // Welcome to PHP

    // remember to include header.php on every page where you need it
    require('./templates/header.php');
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
            Welcome, 
            <b>
                <?= $_POST['first_name']." ".$_POST['last_name']; ?>
            </b>
            <br>
            You have successfully signed up!
        </span>    

    </div>
    <?php require('./templates/footer.php'); ?>
</body>
</html>