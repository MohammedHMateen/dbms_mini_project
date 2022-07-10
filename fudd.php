<!DOCTYPE html>
<html>
<head>
<title>Fund Management</title>
<div class="menu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="fuadd.php">Add Funds</a></li>
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
background-color: cyan;
color: white;
}
tr:nth-child(even) {background-color: lightcyan}
</style>
</head>
<body>
<table>
<tr>
<th>Trans_id</th>
<th>Vol_id</th>
<th>Date</th>
<th>Particulars</th>
<th>Trans_type</th>
<th>Amt</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "p", "mp_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM fund_full";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Trans_id"]. "</td><td>" . $row["Vol_id"]. "</td><td>" . $row["Date"]. "</td><td>"
. $row["Particulars"]. "</td><td>" . $row["Trans_type"]. "</td><td>". $row["Amt"].  "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<style>
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
background-color: purple;
color: white;
}
tr:nth-child(even) {background-color: azure}
</style>
</head>
<body>
<table>
<tr>
<th>BALANCE</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "p", "mp_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM b";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Balance"]. "</td></tr>";
}
echo "</table>";
 $conn->close();
?>
</table>


</body>
</html>