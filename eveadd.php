<?php
$Event_id = filter_input(INPUT_POST, 'Event_id');
$Vol_id = filter_input(INPUT_POST, 'Vol_id');
$Date = filter_input(INPUT_POST, 'Date');
$Venue = filter_input(INPUT_POST, 'Venue');
$No_vol = filter_input(INPUT_POST, 'No_vol');
$Summary = filter_input(INPUT_POST, 'Summary');
$Response = filter_input(INPUT_POST, 'Response');

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
$sql = "INSERT INTO event (Event_id,Vol_id,Date,Venue,No_vol,Summary,Response)
values ('$Event_id','$Vol_id', '$Date','$Venue','$No_vol','$Summary','$Response')";



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
<title>Event Add</title>
</head>
<body>
<div class="menu">
                <ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="eved.php">View Events</a></li>
                    
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
<div class="menuu">
<form method="post" action="eveadd.php">
Event_id : <input type="text" name="Event_id"><br><br>
Vol_id : <input type="text" name="Vol_id"><br><br>
Date : <input type="text" name="Date"><br><br>
Venue : <input type="text" name="Venue"><br><br>
No_vol : <input type="text" name="No_vol"><br><br>
Summary : <input type="text" name="Summary"><br><br>
Response (Awesome/Good/Average/Improvement/Bad): <input type="text" name="Response"><br><br>
<input type="submit" value="SUBMIT->">
</form>
</div>
<style>
.menuu{
	font-size: 24px;
	padding-top: 50px;
	background-color: hotpink;
}
</style>
</body>
</html>


