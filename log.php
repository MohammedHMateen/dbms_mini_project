<?php

$conn = mysqli_connect("localhost", "root", "p", "mp_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['usname'])){
    $usname=$_POST['usname'];
    $pwd=$_POST['pwd'];
    $sql="select * from logins where UAcc='".$usname."' AND Pwd='".$pwd."'limit 1";
    $result = $conn->query($sql);
    if($result->num_rows == 0){
        echo "You have logged in";
        exit();
    }
    else{
        echo "Incorrect info!!";
        exit();
    }
}
 $conn->close();



?>






<html>
<head>
<title>Erdiagram</title>
    <link rel="stylesheet" type="text/css" href="log_style.css">
<body>
    <style>

body{
    margin: 0;
    padding: 0;
    background: url(DBERD.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
</style>
    <!--<div class="loginbox">
    <img src="log_avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="POST" action="#">
            <p>Username</p>
            <input type="text" name="usname" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password">
            <input type="submit" name="" value="Login">
            <a href="home.php">Login as Guest</a>
        </form>
        
    </div>-->

</body>
</head>
</html>