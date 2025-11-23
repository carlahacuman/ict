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
$check = "SELECT attended FROM registration WHERE idNum = '$idNum'";
$result = $conn->query($check);

 if($result->num_rows ===0) {
    echo"Not yet Registered!";
    exit();
 }
 
$rows= $result->fetch_assoc();

if ($rows['attended'] ==='yes'){
    echo"Already Attended";
}

$sql = "UPDATE registration set attended ='yes' WHERE idNum='$idNum'";
    if($conn->query($sql)===TRUE){
        echo"Registration Updated!";
    } else {
        echo"Error" .$conn.error;
    }

$conn->close();
?>