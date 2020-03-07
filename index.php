<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage | QUASF</title>

    <!--Link the css code-->
    <link rel = "stylesheet" href= "styles.css">

</head>
<body>
    
<h1 style="color:#990000;text-align:left;font-size:60px"><strong> Welcome to Queens Applied Science Forum!</h1>

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
    <?php
        include 'giveUser.php';
        if( isset($_POST['submit']) )
        {
            //TODO: Fix this. s
            $val1 = htmlentities($_POST['uname']);
            $val2 = htmlentities($_POST['upass']);
        }
    ?>
    <form action="giveUser.php" method="post">
        <input type="text" placeholder="Username" name="uname">
        <input type="text" placeholder="Password" name="upass">
        <input type="submit">
    </form>
</div>

<!-- Login -->
<div id='loginUser' class='tabcontent'>
    <form action="getUser.php" method="post">
        <input type="text" placeholder="Username" name="loginUName">
        <input type="text" placeholder="Password" name="loginUPass">
        <input type="submit">
    </form>
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

    <script src="index.js">
    </script>
</body>
</html>
