<?php
$path=str_replace('www','',getcwd());
system('"'.$path.'mysql\bin\mysqld.exe"');
$servername = "localhost";
$username = "root";
$password = "";
$db = "alkabuilder";


$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
