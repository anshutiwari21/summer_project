<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoping";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$maje="";
      if ($conn->connect_error) {
    
} else 
    
}
$user=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


$query = "INSERT INTO customer (USERNAME,EMAIL,PSWRD) VALUES ('$user','$email','$password')"; 
$result = $conn->query($query);
if($result){
    echo"hiii";
}
else{
 echo"byee";   
}
?>