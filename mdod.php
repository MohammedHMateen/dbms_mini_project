<!DOCTYPE html>
<html>
<head>
<title>Money Donation Details</title>
<div class="menu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="mdoadd.php">Add Money Donations</a></li>
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
background-color: purple;
color: white;
}
tr:nth-child(even) {background-color: azure}
</style>
</head>
<body>
<table>
<tr>
<th>Do_id</th>
<th>Donor Name</th>
<th>Phno</th>
<th>Date</th>
<th>Amount</th>
<th>Recieved Status</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "p", "mp_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM m_dons";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["D_id"]. "</td><td>" . $row["Donor_name"]. "</td><td>". $row["Phno"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["Amt"]. "</td><td>" . $row["Rcv_stats"] . "</td></tr>";
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
<th>Donations Collected</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "p", "mp_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql =  'CALL dosum()';
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["dom"]. "</td></tr>";
}
echo "</table>";
 $conn->close();
?>
</table>

</body>
</html>







           