<?php
}
require 'app_config.php';

//Connect to SQL ($link)
$conn = mysqli_connect(DATABASE_HOST,DATABASE_USERNAME, DATABASE_PASSWORD); //retrieve user data in sqli
if(! $conn ) {
    die('Could not connect: ' . mysqli_error($conn));
}

//Connect to data base
mysql_select_db(DATABASE_NAME)
or die("<p>Error selecting the database" . DATABASE_NAME . mysql_error() . "</p>");
?>