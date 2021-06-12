<?php
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "shah_it_institute";
$HOSTNAME = "localhost";

$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD,$DATABASE) or die("Connect failed: %s\n". $conn -> error);

if($conn){
    echo "Successful";
}
else{

    die("connection failed!");
}
?>