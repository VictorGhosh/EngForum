
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

    $currentUser = null;
    $currentPass = null;

    //Connect to SQL ($link)
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(! $conn ) {
        die('Could not connect: ' . mysqli_error($conn));
    }

    //Get user input from html page and "encrypt"
    $username = mysqli_real_escape_string($conn, $_POST["loginUName"]);
    $password = mysqli_real_escape_string($conn, $_POST["loginUPass"]);

    //Get list of current usernames from database
    $sql = "SELECT uname, upass FROM clientLogin";
    mysqli_select_db($conn, $db);
    $result = mysqli_query($conn, $sql);
    if(! $result) {
        die('Could not retrive username data: ' . mysqli_error($conn));
    }

    //Runs through all usernames
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        //Check if username matches input
        if ($row["uname"] === $username) {
            $currentUser = $row["uname"];

            //Check if password matches input
            if ($row["upass"] === $password) {
                //User accepted
                echo "Welcome back " . $currentUser . "\n";
            } else {
                userLoginFail();
            }
            return;
        } else {
            $currentUser = null;
        }
    } if ($currentUser == null) {
        userLoginFail();
    }

    mysqli_close($conn);

    function userLoginFail() {
        echo "Username and/or password is incorrect :(";     
    }
?>

</body>
</html>

<!-- DO NOT EVER LINK TO THIS PAGE -->
