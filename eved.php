<!DOCTYPE html>
<html>
<head>
<title>Event Details</title>
<div class="menu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="eveadd.php">Add Events</a></li>
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
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
padding-top: 50px;
}
th {
background-color: darkgoldenrod;
color: white;
}
tr:nth-child(even) {background-color: gold}
</style>
</head>
<body>
<table>
<tr>
<th>Event_id</th>
<th>Vol_id</th>
<th>Date</th>
<th>Venue</th>
<th>No.of_vol</th>
<th>Summary</th>
<th>Response</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "p", "mp_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM event";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Event_id"]. "</td><td>" . $row["Vol_id"]. "</td><td>" . $row["Date"]. "</td><td>"
. $row["Venue"]. "</td><td>" . $row["No_vol"]. "</td><td>" . $row["Summary"]. "</td><td>" . $row["Response"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>