<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="vishal";

$conn = new mysqli($db_host,$db_user,$db_password,$db_name);
if(isset($_REQUEST['signup']))
{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];

    $sql="INSERT INTO registration_tb(user_name,user_email,user_password)
        VALUES('$name','$email','$password')";
     $conn->query($sql);
     echo"<script>location.href='login.php'</script>";
    
    
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <h1 align="center">welcme to online voting portal</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vishalbook</title>
</head>
<body>
    <form action="">
        <input type="text" align="center" class="input" name="name"  placeholder="name" ><br><br><br><br><br><br>
        <input type="text" class="input" name="email" align="center" placeholder="email"><br><br><br><br>
        <input type="text" class="input" name="password" align="center"placeholder="password"><br><br>

        <button type="submit" class="btn" name="signup">sign up</button>
</form>



    
</body>
</html>