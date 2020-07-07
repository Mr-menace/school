
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
    echo " <font color=green>User Found!: $match results <br> </font>";
    while($row = $checker->fetch_assoc()) {
        echo "ID: " . $row["id"]."<br> Username: ". $row["Username"]. "<br>";
        echo "Password: ".$row['Password']. "<br>";
        echo "Email: ".$row['email']. "<br>";
        echo"==========================================<br>";
    }

}else{
    echo"<font color=red>*No Such Record Found*</font>";
}



// Close connection
mysqli_close($sql);


?>
