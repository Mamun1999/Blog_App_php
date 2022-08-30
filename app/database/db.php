<?php

require('connect.php');
//  $sql="Select * from users";
//  $stmt=$conn->prepare($sql);
//  $stmt->execute();
//  $users=$stmt->get_result()->fetch_all(MYSQLI_ASSOC);
//  echo "<pre>". print_r($users),"</pre>";
//  var_dump($users);

function printx($value){
    echo "<pre>". print_r($value,true),"</pre>";
    die();
}


function selectAll($table){
    global $conn;
    $sql="Select * from $table";
 $stmt=$conn->prepare($sql);
 $stmt->execute();
 $records=$stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    return $records;
}

$users= selectAll('users');

printx($users);

?>