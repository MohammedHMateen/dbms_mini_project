<?php
$Vol_id = filter_input(INPUT_POST, 'Vol_id');
$Name = filter_input(INPUT_POST, 'Name');
$Address = filter_input(INPUT_POST, 'Address');
$Phno = filter_input(INPUT_POST, 'Phno');
$Date_join = filter_input(INPUT_POST, 'Date_join');
$Active = filter_input(INPUT_POST, 'Active');


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
$sql = "INSERT INTO Vol_details (Vol_id, Name, Address, Phno, Date_join, Active)
values ('$Vol_id', '$Name','$Address','$Phno','$Date_join','$Active')";

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
<title>Volunteer Details Add</title>
</head>
<body>
<div class="menu">
                <ul>
					<li><a href="voluaddkill.php">Add Skills</a></li>
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
<form method="post" action="voluadd.php">
Volunteer_id : <input type="text" name="Vol_id"><br><br>
Name : <input type="text" name="Name"><br><br>
Address : <input type="text" name="Address"><br><br>
Phone Number : <input type="text" name="Phno"><br><br>
Date of Join : <input type="text" name="Date_join"><br><br>
Active Status : <input type="text" name="Active"><br><br>
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


