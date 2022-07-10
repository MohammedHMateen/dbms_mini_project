<?php
$D_id = filter_input(INPUT_POST, 'D_id');
$Date = filter_input(INPUT_POST, 'Date');
$Donor_name = filter_input(INPUT_POST, 'Donor_name');
$Phno = filter_input(INPUT_POST, 'Phno');
$Co_loc = filter_input(INPUT_POST, 'Co_loc');
$Quantity = filter_input(INPUT_POST, 'Quantity');


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
$sql = "INSERT INTO f_dons (D_id, Date, Donor_name, Phno, Co_loc, Quantity)
values ('$D_id', '$Date', '$Donor_name', '$Phno', '$Co_loc', '$Quantity')";

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
<title>Food Donations Add</title>
</head>
<body>
<div class="menu">
                <ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="fdod.php">View Details</a></li>
                    
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
<form method="post" action="fdoadd.php">
Donor_id : <input type="text" name="D_id"><br><br>
Donor_name : <input type="text" name="Donor_name"><br><br>
Phone : <input type="text" name="Phno"><br><br>
Date : <input type="text" name="Date"><br><br>
Collection_Location : <input type="text" name="Co_loc"><br><br>
Quantity : <input type="text" name="Quantity"><br><br>
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