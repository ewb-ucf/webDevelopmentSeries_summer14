<?php 
    // Welcome to PHP

    // this is a PHP comment
    /*
        and this,
        is a multiline comment.
        everything in between the php tags (<?php and ?>)
        can contain php code.
    */

    // variables always start with a $
    $title = "Josh Kaplan"

?>

<!DOCTYPE html>
 
<html>
<head>

    <link rel="stylesheet" type="text/css" href="./styles.css">
    <!-- this is how you import fonts -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>     
    <meta name="author" content="Josh Kaplan">
    <!-- see how we can use php variables to output html -->
    <?php // but what about php comments ?>
    <title><?= $title; ?></title>
</head>

<body>
    <div>
        <?php require('nav.php'); ?>
        
        <?php if ($_SERVER['PHP_SELF'] == '/index3.php'): ?>

            <span>
                <img src="propic.jpg" width="350"/>
            </span>  

        <?php else: ?>

            <span>
                <p>
                I am currently a senior pursuing my B.S. in Aerospace Engineering 
                at the University of Central Florida. My interests include 
                mechanical, aerospace, systems, and software engineering. I have 
                completed extensive coursework in aerodynamics, orbital mechanics, 
                space systems design, and satellite payloads and integration. 
                I am also completing a minor in computer science. Prior to 
                attending UCF, I earned my A.A. degree at Palm Beach State College, 
                where I worked as a supplemental instructor of physics.
                </p>
            </span>   

        <?php endif; ?>

        
    </div>
        

    <?php require('footer.php'); ?>

</body>
</html>
