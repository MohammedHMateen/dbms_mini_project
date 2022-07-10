<?php
$link = mysqli_connect("localhost", "root", "p", "mp_1"); 
  
if($link === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
  $delid = $_GET['delid'];
$sql = "DELETE FROM vol_details WHERE Vol_id=$delid";

$sql1 = "DELETE FROM vol_skill WHERE Vol_id=$delid"; 
if(mysqli_query($link, $sql)){ 
    echo "Record was deleted successfully."; 
}  
else{ 
    echo "ERROR: Could not able to execute $sql. "  . mysqli_error($link); 
}
if(mysqli_query($link, $sql1)){ 
    echo "Record was deleted successfully."; 
}  
else{ 
    echo "ERROR: Could not able to execute $sql1. "  . mysqli_error($link); 
} 
mysqli_close($link); 
?> 


<!DOCTYPE html>
<html>
<head>
<title>Record $delid Deleted</title>
<div class="menu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="volud.php">View Details</a></li>
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