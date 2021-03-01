<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="avinash";

$conn = new mysqli($db_host,$db_user,$db_password,$db_name);
if(isset($_REQUEST['signup']))
{
    $name=$_REQUEST['name'];
    

    $sql="INSERT INTO bjp(name)
        VALUES('$name')";
     $conn->query($sql);
     echo"<script>location.href='bjp.php'</script>";
    
    
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <h1 align="center">add your valuable vote</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voting portal</title>
</head>
<body>
    <form style="text-align:center">
        <input type="text" align="center" class="input" name="name"  placeholder="name" ><br><br><br><br><br><br>
        

        <button type="submit" class="btn" name="signup">add my vote</button>
        


</form>



    
</body>
<?php
                 


$sql="select * from bjp";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res))
                {
                  ?>
                               <div style="text-align:center">
                                    <h2>vote <?php echo $row["vote"]; ?></h2>
                                    <p><?php echo $row["name"]; ?></p>
                </div>
</html>
<?php
                }
                ?>