<!-- PWEDE DIN MAG MANIPULATE NG STRUCTURES SA PHP AS LONG AS DECLARED ANG ATING EXTERNAL CSS FILE OR JS FILE :) --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel='stylesheet' type='text/css' media="screen" href='css/index.css'>

    <link rel='stylesheet' type='text/css' media="screen" href='css/frameworkdesign.css'>


</head>
<body>
    
</body>
</html>

<?php

$server="localhost";
$user="root";
$pass="";
$db="accounts";

$sql= mysqli_connect($server,$user,$pass,$db);

if($sql === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = $_GET["name"];
//search muna sa ID kung may match 
$check="SELECT id,Username,Password,email FROM tbusers WHERE Username LIKE '$name%'";
$checker=mysqli_query($sql,$check);
if (mysqli_num_rows($checker) >0)
{
   $match = mysqli_num_rows($checker);
   echo "<div class=container-fluid id=result-body>";
    echo "<center><p class=color>User Found!: $match results <br> </p></font></center>";
    while($row = $checker->fetch_assoc()) {
        echo "ID: " . $row["id"]."<br> Username: ". $row["Username"]. "<br>";
        echo "Password: ".$row['Password']. "<br>";
        echo "Email: ".$row['email']. "<br>";
        echo"  ========================================<br>";
    }

}else{
    echo"<center><font color=red>*No Such Record Found*</font></center>";
}
echo "</div>";


// Close connection
mysqli_close($sql);


?>
