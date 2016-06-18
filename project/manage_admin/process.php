
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "shopping";
	
//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	
//Select Database
mysql_select_db($dbname) or die(mysql_error());
	
// Retrieve data from Query String
$age = $_GET['age'];
	
// Escape User Input to help prevent SQL Injection
$age = mysql_real_escape_string($age);
	
//build query
$query = "SELECT * FROM mobiles where brand='$age'";

	 // output data of each row
$x=0;
//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

//Build Result String


// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){
if($x==0){         

            echo "<form action='mobilezoom.php' method='post'><div class='col-xs-4 col-sm-4' ><div >";    
    echo "<a ><tr><img src='".$row["image"]."'style='display: block;
    margin-left: auto;
    margin-right: auto;'><input type='text' name='firstname' value='".$row["brand"]."'style='visibility: hidden;'><input type='text' name='lastname' value='".$row["model"]."'style='visibility: hidden;'>";
        
            echo "<input type='submit' value='".$row["brand"]." ".$row["model"]."'style='padding-left: 35%;border: none;
background: none;'>";
          echo "<p style='text-align:center;'>Rs.".$row["price"]."</p>";
             
                   echo"</div></div></form>";
        
        }
        if($x==1){

            echo "<form action='mobilezoom.php' method='post'><div class='col-xs-4 col-sm-4' ><div>";    
    echo "<a  name='".$row["brand"]."'><tr><img src='".$row["image"]."'style='display: block;
    margin-left: auto;
    margin-right: auto;'><input type='text' name='firstname' value='".$row["brand"]."'style='visibility: hidden;'><input type='text' name='lastname' value='".$row["model"]."' style='visibility: hidden;'>";
        
            echo "<input type='submit' value='".$row["brand"]." ".$row["model"]."'style='padding-left: 35%;border: none;
background: none;'>";
          echo "<p style='text-align:center;'>Rs.".$row["price"]."</p>";
             
                   echo"</div></div></form>";
          }
        if($x==2){

            echo "<form action='mobilezoom.php' method='post'><div class='col-xs-4 col-sm-4' ><div >";    
    echo "<a  name='".$row["brand"]."'><tr><img src='".$row["image"]."'style='display: block;
    margin-left: auto;
    margin-right: auto;'><input type='text' name='firstname' value='".$row["brand"]."'style='visibility: hidden;'><input type='text' name='lastname' value='".$row["model"]."'style='visibility: hidden;'>";
         echo "<input type='submit' value='".$row["brand"]." ".$row["model"]."'style='padding-left: 35%;
border: none;
background: none;'>";
          echo "<p style='text-align:center;'>Rs.".$row["price"]."</p>";
             
                   echo"</div></div></form>";
                    $x=-1;
          }
        
        
        
     $x+=1;}

?>