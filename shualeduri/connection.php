<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $name = "Recipe";

    $conn = mysqli_connect($server, $user, $password, $name);
    if(!$conn){
        die("Server connnection was unable to happen");
    }
    else{
        echo "connection was succesful";
    }
?>