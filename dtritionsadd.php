<?php
$Vol_id = filter_input(INPUT_POST, 'Vol_id');
$Date = filter_input(INPUT_POST, 'Date');
$Quantity = filter_input(INPUT_POST, 'Quantity');
$Vhcl_info = filter_input(INPUT_POST, 'Vhcl_info');
$Pick_loc = filter_input(INPUT_POST, 'Pick_loc');
$Drop_loc = filter_input(INPUT_POST, 'Drop_loc');

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
$sql = "INSERT INTO distribution (Vol_id, Date, Quantity, Vhcl_info, Pick_loc, Drop_loc)
values ('$Vol_id', '$Date', '$Quantity', '$Vhcl_info', '$Pick_loc', '$Drop_loc')";

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
<title>Add Distribution Details</title>
</head>
<body>
<div class="menu">
                <ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="dtritionsd.php">Veiw Distribution Details</a></li>
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
<div class="menus">
<form method="post" action="dtritionsadd.php">
Volunteer_id : <input type="text" name="Vol_id"><br><br>
Date : <input type="text" name="Date"><br><br>
Quantity : <input type="text" name="Quantity"><br><br>
Vehicle info : <input type="text" name="Vhcl_info"><br><br>
Pick up location : <input type="text" name="Pick_loc"><br><br>
Drop location  : <input type="text" name="Drop_loc"><br><br>

<input type="submit" value="SUBMIT->">
</form>
</div>
<style>
.menus{
	font-size: 24px;
	padding-top: 50px;
	background-color: cyan;
}
</style>
</body>
</html>
