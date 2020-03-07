<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Profile</title>

    <!--Link the css code-->
    <link rel = "stylesheet" href= "styles.css"> 
</head>
<body>

    <form action="giveUserProfile.php" method="post">
        <br>
        <!-- Select year -->
        <lable for="year">Year: </lable><br>
        <input type="radio" id="freshman" name="year" value="freshman">
            <label for="freshman">Freshman</label><br>
        <input type="radio" id="sophomore" name="year" value="sophomore">
            <label for="sophomore">Sophomore</label><br>
        <input type="radio" id="junior" name="year" value="junior">
            <label for="junior">Junior</label><br>
        <input type="radio" id="senior" name="year" value="senior">
            <label for="senior">Senior</label><br>
        <input type="radio" id="na" name="year" value="na">
            <label for="na">N/A</label><br>
        <br>
        <!-- Select status -->
        <lable for="status">Status: </lable><br>
        <input type="radio" id="student" name="status" value="student">
            <label for="student">Student</label><br>
        <input type="radio" id="professor" name="status" value="professor">
            <label for="professor">Professor</label><br>
        <input type="radio" id="ta" name="status" value="ta">
            <label for="ta">Teaching Assistant</label><br>
        <input type="radio" id="staff" name="status" value="staff">
            <label for="staff">Staff</label><br>
        <br>
        <!-- Select program -->
        <lable for="program">Program: </lable><br>
        <input type="radio" id="chemEng" name="program" value="chemEng">
            <label for="chemEng">Chemical Engineering</label><br>
        <input type="radio" id="engChem" name="program" value="engChem">
            <label for="engChem">Engineering Chemistry</label><br>
        <input type="radio" id="civ" name="program" value="civ">
            <label for="civ">Civil</label><br>
        <input type="radio" id="comp" name="program" value="comp">
            <label for="comp">Computer</label><br>
        <input type="radio" id="elec" name="program" value="elec">
            <label for="elec">Electrical</label><br>
        <input type="radio" id="mech" name="program" value="mech">
            <label for="mech">Mechanical</label><br>
        <input type="radio" id="min" name="program" value="min">
            <label for="min">Mining</label><br>
        <input type="radio" id="phys" name="program" value="phys">
            <label for="phys">Physics</label><br>
        <input type="radio" id="geo" name="program" value="geo">
            <label for="geo">Geological</label><br>
        <input type="radio" id="apple" name="program" value="apple">
            <label for="apple">Apple</label><br>
        <input type="radio" id="na" name="program" value="na">
            <label for="na">N/A</label><br>
        <!-- Bio -->
        <lable for="bio">Account Bio: </lable><br>
        <textarea name="bio" rows="10" cols="50" maxlength="400"></textarea><br> 
        <!-- Login -->
        <lable for="loginUName">Confirm Login: </lable><br>
        <input type="text" placeholder="Username" name="loginUName"><br>
        <input type="text" placeholder="Password" name="loginUPass"><br>
        <br>
        <!-- Submit -->
        <input type="submit" value="Submit">
    </form>

</body>
</html>