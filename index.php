<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--Link the css code-->
    <link rel = "stylesheet" href= "styles.css"> 

</head>
<body>

<!--This is the tab links-->
<div class="tab">
    <button class="tablinks" id="tabIndexBTN1" onclick="openTabIndex(event, 'Profile')" id=defaultOpen>Profile</button>
    <button class="tablinks" id="tabIndexBTN2" onclick="openTabIndex(event, 'Subscriptions')">Subscriptions</button>
    <button class="tablinks" id="tabIndexBTN3" onclick="openTabIndex(event, 'search')">Search</button>
    <button class="tablinks" id="tabIndexBTN4" onclick="openTabIndex(event, 'AboutMe')">AboutMe</button>
    <button class="tablinks" id="tabIndexBTN5" onclick="openTabIndex(event, 'createUser')">Create User</button>
</div>
<hr>

<!--Tab Content-->

<!--Create User-->
<div id='createUser' class='tabcontent'>
    <input type="text" placeholder="Username" name="uname">
    <input type="text" placeholder="Password" name="upass">
    <button type="button" onclick="openTabIndex(event, 'giveUserInfo')">Submit</button>
</div>

<div id='giveUserInfo'>
    <?php
        $uNameFile = fopen("clientUName.txt", "w") or die("Unable to open clientUName.txt");
        $uPassFile = fopen("clientUPass.txt", "w") or die("Unable to open clientUPass.txt");
        $uName = "Username\n";
        $uPass = "Password\n";
        fwrite($uNameFile, $uName);
        fwrite($uPassFile, $uPass);
        fclose($uNameFile);
        fclose($uPassFile);
    ?> 
</div>

<!--Search Bar-->
<div id ='search' class='tabcontent'>
    <form class="example" action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit">Submit<i class="fa fa-search"></i></button>
    </form>
</div>>
    <script 
    src="index.js">
    </script>
</body>
</html>