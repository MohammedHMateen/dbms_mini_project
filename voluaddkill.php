<?php
$Vol_id = filter_input(INPUT_POST, 'Vol_id');
$Skill = filter_input(INPUT_POST, 'Skill');


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
$sql = "INSERT INTO vol_skill (Vol_id, Skill)
values ('$Vol_id', '$Skill')";

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
					<li><a href="home.php">Home</a></li>
					<li><a href="volud.php">View Details</a></li>
                    <li><a href="voluadd.php">Add Vounteers</a></li>
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
<form method="post" action="voluaddkill.php">
Volunteer_id : <input type="text" name="Vol_id"><br><br>
Skill : <input type="text" name="Skill"><br><br>
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


