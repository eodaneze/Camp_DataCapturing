<?php
$host = 'localhost';
$username= 'root';
$password = '';
$dbname = 'su_camp';
 $conn = mysqli_connect($host, $username, $password, $dbname);

 if(!$conn){
    //  echo "Db connected successfully";
     echo "error connecting to db";
 }
?>