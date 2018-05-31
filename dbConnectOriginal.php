<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$host_name = 'db738228935.db.1and1.com';
$database = 'db738228935';
$user_name = 'dbo738228935';
$password = 'Sweeter190!';
$link = mysqli_connect($host_name, $user_name, $password, $database);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM fantasy_players";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_array($result)){
        // create a button for each record found
           echo "<button class='loginBtn' id='loginBtn'>" . $row['name'] . "<br> ID" . $row['fantasy_player_id'] . "</button><br>";

            //echo "<tr>";
              //  echo "<td>" . $row['fantasy_player_id'] . "</td>";
                //echo "<td>" . $row['name'] . "</td>";
                
            //echo "</tr>";
        }
       // echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
