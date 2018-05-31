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
 

?>
