
<!-- DO NOT EVER LINK TO THIS PAGE -->

<?php
    $dbhost = 'localhost';
    $dbuser = 'clientMaster';
    $dbpass = 'Password';
    $db = 'CLIENTUSERDATA';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if(! $conn ) {
        die('Could not connect: ');
    }

    if(! get_magic_quotes_gpc() ) {
        $username = addslashes ('Test Username');
        $password = addslashes ('Test Password');
    } else {
        $username = 'Test Username (no slash)';
        $password = 'Test Password (no slash)';
    }
    $creation_date = 'Test Creation Date';
    $sql = "INSERT INTO clientLogin ".
        "(username,password,creation_date) ".
        "VALUES"."($username, $password, $creation_date)";

    mysqli_select_db($conn, $db);
    $retval = mysqli_query( $sql, $conn );
      
    if(! $retval ) {
    die('Could not enter data: ');
    }
    echo "Entered data successfully\n";

    mysqli_close($conn);
?>

<!-- DO NOT EVER LINK TO THIS PAGE -->
