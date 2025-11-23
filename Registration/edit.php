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
$studFName =$_POST['studFName'];
$studLName =$_POST['studLName'];
$campus =$_POST['campus'];
$amountPaid =$_POST['amountPaid'];

$sql = "UPDATE registration set studFName='$studFName', studLName='$studLName', campus='$campus', amountPaid='$amountPaid' WHERE idNum='$idNum'";
    if($conn->query($sql)===TRUE){
        echo"Registration Updated!";
    } else {
        echo"Error" .$conn.error;
    }

$conn->close();
?>