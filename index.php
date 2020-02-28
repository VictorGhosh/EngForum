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
    <button class="tablinks" id="tabIndexBTN1" onclick="openTabIndex(event, 'profile')" id=defaultOpen>Profile</button>
    <button class="tablinks" id="tabIndexBTN2" onclick="openTabIndex(event, 'Subscriptions')">Subscriptions</button>
    <button class="tablinks" id="tabIndexBTN3" onclick="openTabIndex(event, 'search')">Search</button>
    <button class="tablinks" id="tabIndexBTN4" onclick="openTabIndex(event, 'AboutMe')">AboutMe</button>
<<<<<<< HEAD:index.html
=======
    <button class="tablinks" id="tabIndexBTN5" onclick="openTabIndex(event, 'createUser')">Create User</button>
>>>>>>> 15eb838219b9af5dbba22114032d342fd5f6f861:index.php
</div>
<hr>

<!--Tab Content-->

<!--Create User-->
<div id='createUser' class='tabcontent'>
    <form action="giveUser.php" method="post">
        <input type="text" placeholder="Username" name="uname">
        <input type="text" placeholder="Password" name="upass">
        <input type="submit">
    </form>
</div>


<!--Search Bar-->
<div id ='search' class='tabcontent'>
    <form class="example" action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit">Submit<i class="fa fa-search"></i></button>
    </form>
</div>>

<!--Code profile,,, Procedure is explained below-->>
<div id='profile' class='tabcontent'>
    <div id ='thumbnail-viewer'></div>
    <div id='thumbnails'>

        <a href ="QuestionDisplay" class='thumb active' title='DisplayNotWorking'> <!--Show question-->>
            <button id='thumbnailNum1'>sQuestion</button> </a>
        <a> href='ImageToDisplay' title='DisplayNotWorking' <!--Show image related to question-->>
            <button id ='thumbnailNum2'>Image</button> </a> 
        <a href ='AnswerDisplay'  title='DisplayNotWorking'> <!--Show answer to question-->>
            <button id='thumbnailNum3'>Answer</button> </a>
    </div>
</div>

    <script 
    src="index.js">
    </script>
</body>
</html>
<!--Goal of profile is to save input, display input on a photo viewer control panel,
 The control panel has 3 tabs, one for question it self, the other for image and third for response-->>