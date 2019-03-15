<?php
$servername = "localhost";
$database ="dbpieceauto";
$user="root";
$password="";
// Create connection
$conn = mysqli_connect($servername, $user, $password, $database);
// Check connection

if ($conn) {
    echo 'BD connectee <BR>';
    //echo $database;
}
else{
    die("Connection failed: " . mysqli_connect_error());
}
//echo $server;
//mysqli_close($conn);
?>
