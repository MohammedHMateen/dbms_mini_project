<?php
$Trans_id = filter_input(INPUT_POST, 'Trans_id');
$Vol_id = filter_input(INPUT_POST, 'Vol_id');
#$Date = filter_input(INPUT_POST, 'Date');
$Particulars = filter_input(INPUT_POST, 'Particulars');
$Trans_type = filter_input(INPUT_POST, 'Trans_type');
$Amt = filter_input(INPUT_POST, 'Amt');
#$Bal_amt = filter_input(INPUT_POST, 'Bal_amt');

$host = "localhost";
$dbusername = "root";
$dbpassword = "p";
$dbname = "mp_1";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO  fund_mgmt (Trans_id,Vol_id, Particulars, Trans_type, Amt)
values ('$Trans_id','$Vol_id', '$Particulars', '$Trans_type','$Amt')";


if ($conn->query($sql)){
  echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Funs</title>
</head>
<body>
<div class="menu">
                <ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="fudd.php">View Funds</a></li>
                </ul>
</div>

<style>
    .menu{
    float: right;
    line-height: 50px;
    margin: 0 0em;
   
}

.menu ul{
    list-style: none;
}

.menu ul li{
    display: inline-block;    
}

.menu ul li a {
    text-decoration: none;
    color: black;
    font-size: 22px;
    font-weight: bolder;
    padding: 0 20px;
}
</style>
<div class="menuc">
<form method="post" action="fuadd.php">
Transaction_id : <input type="text" name="Trans_id"><br><br>
Volunteer_id : <input type="text" name="Vol_id"><br><br>
<!--Date : <input type="text" name="Date"><br><br>-->
Particulars : <input type="text" name="Particulars"><br><br>
Transaction_type (Withdrawal/Deposit): <input type="text" name="Trans_type"><br><br>
Amount: <input type="text" name="Amt"><br><br>
<!--Balance_amount : <input type="text" name="Bal_amt"><br><br>-->
<input type="submit" value="SUBMIT->">
</form>
</div>
<style>
.menuc{
	font-size: 24px;
	padding-top: 50px;
	background-color: lightgreen;
}
</style>
</body>
</html>


