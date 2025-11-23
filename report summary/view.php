<?php
$servername="localhost";
$username="root";
$password="";
$database="uc";

$conn = new mysqli($servername, $username, $password, $database);
if($conn->connect_error){
    die("Connection Failed!" .$conn->connect_error);
}

$sql = "SELECT * FROM registration";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    
</head>
<body>
    <h1>Summary report</h1>
    <a href="../home.html">back to home</a>
    <br><br>

    <table border = "1" cellpadding="10" cellspacing="0" style="width:100% text-align:center;">
    <tr>
        <th>ID#</th>
        <th>Name</th>
        <th>Campus</th>
        <th>Amount</th>
    </tr>
    <?php
        if($result->num_rows > 0){
            while($rows=$result->fetch_assoc()){
            echo"<tr>";
            echo"<td>" .htmlspecialchars($rows['idNum'])."</td>";
            echo"<td>" .htmlspecialchars($rows['studLName'])."," .$rows['studFName'] ."</td>";
            echo"<td>".htmlspecialchars($rows['campus'])."</td>";
            echo"<td>" .htmlspecialchars($rows['amountPaid'])."</td>";
        
            "</tr>";
            }
        } else {
            echo"<tr><td colspan = '5'>NO FOUND STUDENT</td></tr>";
        }

?>
</table>
</body>
</html>