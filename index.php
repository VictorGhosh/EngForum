<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage | QUASF</title>

    <!--Link the css code-->
    <link rel = "stylesheet" href= "styles.css">

    <!-- jQuery -->
        <script src="jquery-3.4.1.min.js"></script>
        <script src="index.js"></script>
</head>
<body>

<h1 style="color:#990000;text-align:left;font-size:60px"><strong> Welcome to Queen's Applied Science Forum!</strong></h1>

<!--This is the tab links-->
<div class="tab">
    <button class="tablinks" id="tabIndexBTN1" onclick="openTabIndex(event, 'profile')" id=defaultOpen>Profile</button>
    <button class="tablinks" id="tabIndexBTN2" onclick="openTabIndex(event, 'subscriptions')">Subscriptions</button>
    <button class="tablinks" id="tabIndexBTN3" onclick="openTabIndex(event, 'search')">Search</button>

    <button class="tablinks" id="tabIndexBTN4" onclick="openTabIndex(event, 'aboutMe')">About Me</button>
    <button class="tablinks" id="tabIndexBTN5" onclick="openTabIndex(event, 'loginUser')">Login</button>
    <button class="tablinks" id="tabIndexBTN6" onclick="openTabIndex(event, 'createUser')">Create Account</button>

</div>
<hr>

<!--Tab Content Start below-->

<!--Form submission of the user's data-->
<div id='createUser' class='tabcontent'>

    <script>
        $(document).ready(function() {
            $(bSubmitCreate).click(function() {
                // $_SESSION["iUName"] = document.getElementById("createUName").value;
                // $_SESSION["iUPass"] = document.getElementById("createUPass").value;
            
                <?php giveUser($_POST["iUName"],$_POST["iUPass"]); ?>
            });
        });
    </script>
        <input type="text" placeholder="Username" id="createUName">
        <input type="text" placeholder="Password" id="createUPass">
        <button id="bSubmitCreate">Submit</button>
</div>

<!-- Login -->
<div id='loginUser' class='tabcontent'>
    
    <script>
        $(document).ready(function() {
            $(bSubmitLogin).click(function() {
            /* When "bSubmitLogin button" is clicked */

                //Save user input as variables
                var iUName = document.getElementById("loginUNameID").value;
                var iUPass = document.getElementById("loginUPassID").value;

                //Ditched ajax. can't figure it out
                //alert(iUPassPage);
                // $.ajax({
                //     type: "POST",
                //     url: "test.php",
                //     data: { uPass: iUPass},
                //     success: function(result){
                //          alert('success');
                //     }
                // });
            });
        });
    </script>
        <input type="text" placeholder="Username" name="loginUName" id="loginUNameID">
        <input type="text" placeholder="Password" name="loginUPass" id="loginUPassID">
        <button id="bSubmitLogin">Submit</button>
</div>

<!--Search Bar-->
<div id ='search' class='tabcontent'>
    <form class="example" action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit">Submit<i class="fa fa-search"></i></button>
    </form>
</div>

<!--This is for the Home tab-->
<div id='home'>
    <!--Retrieve input from the user--> <!--Create a table cotaining questions-->
    <!--Display input in the tabs-->
</div>

<?php  /*
        * Putting php methods here because I cannot for the life of me
        * get $_POST to work with Query. WHY IN THE WORLD DO I NEED TO
        * USE 3 DIFFERNT LANGUAGES!
        */
    
    // function giveUser($uName, $uPass) {

    //     //Begin static vars
    //     $db = 'CLIENTUSERDATA';
    //     $conn = dbConnect();
    //     $username = mysqli_real_escape_string($conn, $_POST["uname"]);
    //     $password = mysqli_real_escape_string($conn, $_POST["upass"]);
    //     //End static vars

    //     //Create Table entry
    //     $sqli = "INSERT INTO clientLogin VALUES ('$username', '$password')";
    //     mysqli_select_db($conn, $db);
    //     $retval = mysqli_real_query($conn, $sqli);
      
    //     if (! $retval ) {
    //     die('Could not enter data: ' . mysqli_error($conn));
    //     }

    //     header("Location: http://quasf.engineering.queensu.ca/createProfile.php");
    //     mysqli_close($conn);
    // }
    
    // function userPassCheck($iUser,$iPass) {

    //     //Begin static vars
    //     $db = 'CLIENTUSERDATA';
    //     $conn = dbConnect();
        
    //     //Get user input from html page and "encrypt"
    //     $username = mysqli_real_escape_string($conn, $iUser);
    //     $password = mysqli_real_escape_string($conn, $iPass);
    //     //End static vars

    //     //Begin nonstatic vars
    //     $currentUser = null;
    //     //End nonstatic vars

    //     //Get list of current usernames from database
    //     $sql = "SELECT uname, upass FROM clientLogin";
    //     mysqli_select_db($conn, $db);
    //     $result = mysqli_query($conn, $sql);
    //     if(! $result) {
    //         die('Could not retrive username data: ' . mysqli_error($conn));
    //     }

    //     //Run through all usernames because I am lazy
    //     while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    //         //Check if username matches input
    //         if ($row["uname"] === $username) {
    //             $currentUser = $row["uname"];
    //             //Check if password matches input
    //             if ($row["upass"] === $password) {
    //                 //User accepted
    //                 userLoginYes($username);
    //             } else {
    //                 //Login fail due to nonexistent username
    //             }
    //             return;
    //         } else {
    //             $currentUser = null;
    //         }
    //     } if ($currentUser == null) {
    //         //Login fail due to nonexistent password
    //     }
    //     mysqli_close($conn);
    // }

    // function dbConnect() {
    //     //ID for access to edit Client dataTables
    //     $dbhost = 'localhost';
    //     $dbuser = 'clientMaster';
    //     $dbpass = 'Password';
    //     //Connect to SQL ($link)
    //     $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    //     if(! $conn ) {
    //         die('Could not connect: ' . mysqli_error($conn));
    //     }
    //     return $conn;
    // }
?>

</body>
</html>
