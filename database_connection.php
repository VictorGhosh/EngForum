<?php
include 'app_config.php';

//Connect to SQL ($link)
$conn = mysqli_connect(DATABASE_HOST,DATABASE_USERNAME, DATABASE_PASSWORD); 

if(! $conn ) {
    die('Could not connect: ' . mysqli_error($conn));
}

//Connect to data base
mysqli_select_db($conn,DATABASE_NAME)
or die("<p>Error selecting the database" . DATABASE_NAME . mysqli_error($conn) . "</p>");
?>