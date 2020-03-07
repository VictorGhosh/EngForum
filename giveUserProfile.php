
<!-- DO NOT EVER LINK TO THIS PAGE -->

<?php
    //ID for access to edit Client dataTables
    $dbhost = 'localhost';
    $dbuser = 'clientMaster';
    $dbpass = 'Password';
    $db = 'CLIENTUSERDATA';

    //Connect to SQL ($link)
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if (! $conn ) {
        die('Could not connect: ' . mysqli_error($conn));
    }

    //Data to input
    $username = mysqli_real_escape_string($conn, $_POST["loginUName"]);
    $password = mysqli_real_escape_string($conn, $_POST["loginUPass"]);
    $year = mysqli_real_escape_string($conn, $_POST["year"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $program = mysqli_real_escape_string($conn, $_POST["program"]);
    $bio = mysqli_real_escape_string($conn, $_POST["bio"]);

    $sqli = "INSERT INTO clientLogin VALUES ('$username', '$password')";
    mysqli_select_db($conn, $db);
    $retval = mysqli_real_query($conn, $sqli);
      
    if (! $retval ) {
    die('Could not enter data: ' . mysqli_error($conn));
    }
    echo "Entered data successfully\n";

    header("Location: http://quasf.engineering.queensu.ca/createProfile.php");
    mysqli_close($conn);
    exit();
?>

<!-- DO NOT EVER LINK TO THIS PAGE -->
