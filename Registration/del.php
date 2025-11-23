<?php
$servername="localhost";
$username="root";
$password="";
$database="uc";

$conn = new mysqli($servername, $username, $password, $database);
if($conn->connect_error){
    die("Connection Failed!" .$conn->connect_error);
}
$idNum = $_POST['idNum'];

$sql = " DELETE FROM registration WHERE idNum= '$idNum'";
    if($conn->query($sql)===TRUE){
        echo"Registration Deleted";
    } else {
        echo"Error" .$conn.error;
    }

$conn->close();
?>