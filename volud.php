<!DOCTYPE html>
<html>
<head>
<title>Volunteer Details</title>
<div class="menu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="voluadd.php">Add Volunteers</a></li>
                    <!--////<li><a href="voldel.php">Delete a Volunteer</a></li>-->
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
background-color: seagreen;
color: white;
}
tr:nth-child(even) {background-color: aquamarine}
</style>
</head>
<body>
<table>
<tr>
<th scope="col">Id</th>
<th scope="col">Name</th>
<th scope="col">Address</th>
<th scope="col">Phone</th>
<th scope="col">Date_join</th>
<th scope="col">Active</th>
<th scope="col">Experience</th>
<th scope="col">Skills</th>
<th></th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "p", "mp_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM v_full";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>" . $row["vol_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["address"]. "</td><td>". $row["phno"]. "</td><td>" . $row["date_join"]. "</td><td>" . $row["active"]. "</td>";
echo "<td>" . $row["experience"] ."</td><td>" . $row["skill"] ."</td>";
echo "<td><a href='voldel.php?delid=". $row['vol_id']."'>_Delete_</a></td>";
echo "</tr>";
 }
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
