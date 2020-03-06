
<!-- DO NOT EVER LINK TO THIS PAGE -->

<?php
    //ID for access to edit Client dataTables
    $dbhost = 'localhost';
    $dbuser = 'clientMaster';
    $dbpass = 'Password';
    $db = 'CLIENTUSERDATA';

    //Connect to SQL ($link)
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass); //retrieve user data in sqli
    if(! $conn ) {
        die('Could not connect: ' . mysqli_error($conn));
    }

    //Data to input
    $username = mysqli_real_escape_string($conn, $_POST["uname"]);
    $password = mysqli_real_escape_string($conn, $_POST["upass"]);

    //$sqli = "INSERT INTO clientLogin VALUES ('$username', '$password')";
    //Create Table of entry
    $sqli = "INSERT INTO clientLogin VALUES ('$user_id', '$username', 
        '$password', '$creation_date')";

    mysqli_select_db($conn, $db);
    $retval = mysqli_real_query($conn, $sqli);
      
    if(! $retval ) {
    die('Could not enter data: ' . mysqli_error($conn));
    }
    echo "Entered data successfully\n";

    mysqli_close($conn);
?>

<!-- DO NOT EVER LINK TO THIS PAGE -->
<!--I'll create a separate table to contain home tab questions-->



