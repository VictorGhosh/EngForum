<!DOCTYPE html>
<html lang="en">
<body>

<?php
    function userSearch($iUser,$iPass) {

        //ID for access to edit Client dataTables
        $dbhost = 'localhost';
        $dbuser = 'clientMaster';
        $dbpass = 'Password';
        $db = 'FORUMPOSTDATA';

        $searchResults = array();

        //Connect to SQL ($link)
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
        if(! $conn ) {
            die('Could not connect: ' . mysqli_error($conn));
        }

        //Get user input from html page 
        $userSearch = mysqli_real_escape_string($conn, $iUser);

        //Get list of current posts from database
        $sql = "SELECT postCategory, postTitle, postContent, postCreator FROM forumPosts";
        mysqli_select_db($conn, $db);
        $result = mysqli_query($conn, $sql);
        if(! $result) {
            die('Could not retrive post data: ' . mysqli_error($conn));
        }

        //Runs through all posts
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            //Check if post matches search input
            $searchTolerance = 0; // value controls how similiar strings must be to consider match
            similar_text($row["postTitle"], $userSearch, $perc);
            if ($perc>$searchTolerance) { 
                $searchResults[ $row["postTitle"] ] = $row["postContent"];
            } 
        }
        //Check if matching posts were found
        if ($searchResults == null) {
            echo "No results found :(";   
        } else {
            echo $searchResults;
        }

        mysqli_close($conn);
        return;
    }

?>

</body>
</html>
