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
        <nav>
            <h1>Josh Kaplan</h1>
                
                <ul>
                    <li><a href="http://joshkaplan.org">about</a></li>
                    <li><a href="#">resume</a></li>
                    <li><a href="#">projects</a></li>
                    <li><a href="#">schedule</a></li>
                    <li><a href="#">contact</a></li>       
                </ul>   
        </nav>
        <span>
            <img src="propic.jpg" width="350"/>
        </span>          
    </div>
        

    <?php require('footer.php'); ?>

</body>
</html>
