<script language="javascript" type="text/javascript">
<!-- 

function ajaxFunction(){
   var ajaxRequest;
   try{
      ajaxRequest = new XMLHttpRequest();
   }catch (e){
      
      try{
         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      }catch (e) {
         
         try{
            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
         }catch (e){
            alert("Your browser broke!");
            return false;
         }
      }
   }
   
   ajaxRequest.onreadystatechange = function(){
   
      if(ajaxRequest.readyState == 4){
         var ajaxDisplay = document.getElementById('asdfg');
         ajaxDisplay.innerHTML = ajaxRequest.responseText;
      }
   }
   
   
   var age = document.getElementById('age').value;
   var queryString = "?age=" + age ;
   

   ajaxRequest.open("GET", "process.php" + queryString, true);
   ajaxRequest.send(null); 
}

</script>

<?php
include("../includes/layout/header.php");
?>
<?php
include("category.php");
?>
<script >
<?php
    include("jquery-1.8.3.min.js");
    ?>
</script>
	<script>
        <?php
    include("jquery.elevatezoom.js");
    ?></script>
</br>
</br>
</br>
</br>
</br><?php include"login.php";
 ?>
<div class="container">
<div class="row">
    <div class="col-xs-3 col-sm-3">
    <div ><br>
        <br><br>
        <br><br>
       
        <div >
            <b>Format</b>
        <form action="">
        <div style="height: 100px;width:200px; overflow-y: scroll;">
    <input type="checkbox" /> All Listings <br />
    <input type="checkbox" /> Auctions <br />
    <input type="checkbox" /> Buy It Now <br />
    
    
</div>  
            <br>
        </form>
        
        </div>
        
        <b>Brand</b>
        <form action="">
        <div style="height: 100px;width:200px; overflow-y: scroll;">
    <input type="checkbox"value='samsung' id='age' onclick='ajaxFunction()'/> Samsung <br />
    <input type="checkbox"/> Apple <br />
    <input type="checkbox" /> Nokia <br />
    <input type="checkbox" /> Lenovo <br />
    <input type="checkbox" /> Mts <br />
    <input type="checkbox" /> LG <br />
    <input type="checkbox" /> Htc <br />
    
</div> 
            <br>

        </form>
        </div>    
        <div >
            <b>Price</b>
        <form action="">
        <div style="height: 100px;width:200px; overflow-y: scroll;">
    <input type="checkbox" /> Rs.2000 and Below <br />
    <input type="checkbox" /> Rs.2001 - Rs.5000 <br />
    <input type="checkbox" /> Rs.5001 - Rs.10000 <br />
    <input type="checkbox" /> Rs.10001 - Rs.18000 <br />
    <input type="checkbox" /> Rs.18001 - Rs.25000 <br />
    <input type="checkbox" /> Rs.25000 and Above <br />
    
    
</div>  
            <br>
        </form>
        
        </div>
        
        <div >
            <b>Ram</b>
        <form action="">
        <div style="height: 100px;width:200px; overflow-y: scroll;">
    <input type="checkbox" /> 1GB-2GB <br />
    <input type="checkbox" /> 2GB-3GB <br />
    <input type="checkbox" /> 2GB <br />
    <input type="checkbox" /> 3GB-4GB <br />
    <input type="checkbox" /> 4GB-6GB <br />
    <input type="checkbox" /> 256MB-512MB <br />
    
    
</div>  
            <br>
        </form>
        
        </div>
        <div >
            <b>Operating-System</b>
        <form action="">
        <div style="height: 40px;width:200px; ">
    <input type="checkbox" /> Android <br />
    <input type="checkbox" /> Windows <br />

</div>  
            <br>
        </form>
        
        </div>
        
        
        
        <div >
            <b>Sim-type</b>
        <form action="">
        <div style="height: 100px;width:200px;">
    <input type="checkbox" /> Dual <br />
    <input type="checkbox" /> Single <br />

    
</div>            
        </form>
        </div>
        
    </div>    
   <div id="main"class="col-xs-9 col-sm-9"style="background-color: #F8F8F8 ;">
    
       
       
       
       
       <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoping";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$maje="";
      if ($conn->connect_error) {
    
} else {
    
}
$sql = "SELECT * FROM mobiles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
$x=0;
echo "<div class='row' id='asdfg'>";
    while($row = $result->fetch_assoc()) {


        if($x==0){         

            echo "<form action='mobilezoom.php' method='post'><div class='col-xs-4 col-sm-4' ><div >";    
    echo "<a ><tr><img src='http://localhost:7777/project/duplicate/mobiles/".$row["FOLDER"]."/".$row["IMAGE"].".jpeg'style='display: block;
    margin-left: auto;
    margin-right: auto;'><input type='text' name='firstname' value='".$row["BRAND"]."'style='visibility: hidden;'><input type='text' name='lastname' value='".$row["MODEL"]."'style='visibility: hidden;'>";
        
            echo "<input type='submit' value='".$row["BRAND"]." ".$row["MODEL"]."'style='padding-left: 35%;border: none;
background: none;'>";
          echo "<p style='text-align:center;'>Rs.".$row["PRICE"]."</p>";
             
                   echo"</div></div></form>";
        
        }
        if($x==1){

            echo "<form action='mobilezoom.php' method='post'><div class='col-xs-4 col-sm-4' ><div>";    
    echo "<a  name='".$row["BRAND"]."'><tr><img src='http://localhost:7777/project/duplicate/mobiles/".$row["FOLDER"]."/".$row["IMAGE"].".jpeg'style='display: block;
    margin-left: auto;
    margin-right: auto;'><input type='text' name='firstname' value='".$row["BRAND"]."'style='visibility: hidden;'><input type='text' name='lastname' value='".$row["MODEL"]."' style='visibility: hidden;'>";
        
            echo "<input type='submit' value='".$row["BRAND"]." ".$row["MODEL"]."'style='padding-left: 35%;border: none;
background: none;'>";
          echo "<p style='text-align:center;'>Rs.".$row["PRICE"]."</p>";
             
                   echo"</div></div></form>";
          }
        if($x==2){

            echo "<form action='mobilezoom.php' method='post'><div class='col-xs-4 col-sm-4' ><div >";    
    echo "<a  name='".$row["BRAND"]."'><tr><img src='http://localhost:7777/project/duplicate/mobiles/".$row["FOLDER"]."/".$row["IMAGE"].".jpeg'style='display: block;
    margin-left: auto;
    margin-right: auto;'><input type='text' name='firstname' value='".$row["BRAND"]."'style='visibility: hidden;'><input type='text' name='lastname' value='".$row["MODEL"]."'style='visibility: hidden;'>";
         echo "<input type='submit' value='".$row["BRAND"]." ".$row["MODEL"]."'style='padding-left: 35%;
border: none;
background: none;'>";
          echo "<p style='text-align:center;'>Rs.".$row["PRICE"]."</p>";
             
                   echo"</div></div></form>";
                    $x=-1;
          }
        
        
        
     $x+=1;
     }
} else {
     echo "0 results";
}
echo "</div>";

$conn->close();

?>
    </div>
    </div>
</div>

<?php
echo"</br>";
echo"</br>";
echo"</br>";
       include("../includes/layout/footer.php");
       ?>