
<!-- DO NOT EVER LINK TO THIS PAGE -->

<?php
    function userPassCheck($iUser,$iPass) {

        //ID for access to edit Client dataTables
        $dbhost = 'localhost';
        $dbuser = 'clientMaster';
        $dbpass = 'Password';
        $db = 'CLIENTUSERDATA';

        $currentUser = null;

        //Connect to SQL ($link)
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
        if(! $conn ) {
            die('Could not connect: ' . mysqli_error($conn));
        }

        //Get user input from html page and "encrypt"
        $username = mysqli_real_escape_string($conn, $iUser);
        $password = mysqli_real_escape_string($conn, $iPass);
        // $username = mysqli_real_escape_string($conn, $_POST["loginUName"]);
        // $password = mysqli_real_escape_string($conn, $_POST["loginUPass"]);

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
                    userLoginYes($username);
                } else {
                    userLoginNo();
                }
                return;
            } else {
                $currentUser = null;
            }
        } if ($currentUser == null) {
            userLoginNo();
        }
        mysqli_close($conn);
    }

    function userLoginNo() {
        echo "Username and/or password is incorrect :(";     
    }

    function userLoginYes($user) {
        echo "Welcome back " . $user . "\n";
    }
?>

<!-- DO NOT EVER LINK TO THIS PAGE -->
