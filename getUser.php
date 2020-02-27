
<!-- DO NOT EVER LINK TO THIS PAGE -->

<!DOCTYPE html>
<html lang="en">
<body>

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

    //Get user input from html page and "encrypt"
    $username = mysqli_real_escape_string($conn, $_POST["loginUName"]);
    $password = mysqli_real_escape_string($conn, $_POST["loginUPass"]);

    //Get list of current usernames from database
    $sqlUNames = "SELECT username FROM clientLogin";
    mysqli_select_db($conn, $db);
    $UNameResult = mysqli_query($conn, $sqlUNames);
    if(! $UNameResult) {
        die('Could not retrive username data: ' . mysqli_error($conn));
    }

    while($row = mysqli_fetch_array($UNameResult, MYSQLI_ASSOC)) {
        echo $row["username"]; 
    }

    mysqli_close($conn);
?>

</body>
</html>

<!-- DO NOT EVER LINK TO THIS PAGE -->
