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
            <?php 
                echo "Opening database...";

                $mysqli = opendb();
                
                echo " " . $mysqli;
                
                // get data from database
                $data = $mysqli->query("SELECT * FROM users;");

                // get each row from data
                while( $row = $data->fetch_row() )
                {
                    // print the values in each row
                    echo $row[0] . " " . $row[1] . " " . $row[2]; 
                }

                // make sure you close the database when finished
                closedb($mysqli);          

             ?> 
        </span>    

    </div>
    <?php require('./templates/footer.php'); ?>
</body>
</html>