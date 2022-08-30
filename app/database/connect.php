<?php

$host=  "localhost:3306/blog";
$user= "root";
$pass= "1234mbrs";
$db_name= "blog";

$conn= new mysqli($host, $user, $pass, $db_name);

if($conn -> connect_error){
    die('database connection error: ' .  $conn->connect_error);
}
else{
    echo " db connect successfully";
}

?>