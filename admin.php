
<!-- DO NOT EVER LINK TO THIS PAGE -->

<?php
    //ID for access to edit Client dataTables
    $dbhost = 'localhost';
    $dbuser = 'clientMaster';
    $dbpass = 'Password';
    $db = 'CLIENTUSERDATA';

    //Connect to SQL ($link)
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(! $conn ) {
        die('Could not connect: ' . mysqli_error($conn));
    }

    //Data to input
    $user_id = '2';
    $username = mysqli_real_escape_string($conn, 'JaneDoe');
    $password = mysqli_real_escape_string($conn, 'JanesPassword');
    $creation_date = mysqli_real_escape_string($conn,'1/22/2456');

    $sqli = "INSERT into clientLogin VALUES ($user_id, $username, $password, $creation_date)";

    mysqli_select_db($conn, $db);
    $retval = mysqli_real_query($conn, $sqli);
      
    if(! $retval ) {
    die('Could not enter data: ' . mysqli_error($conn));
    }
    echo "Entered data successfully\n";

    mysqli_close($conn);
?>

<!-- DO NOT EVER LINK TO THIS PAGE -->
