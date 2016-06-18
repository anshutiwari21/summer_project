<?php
include("../includes/layout/header.php");
?>
<link rel="stylesheet" href="des.css">
<?php
include("category.php");
?>
<br>
<br>
<br>
<br>
<br>
<br>	<style>

		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
			position: relative;
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
		
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }


	</style>
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script src='jquery.zoom.js'></script>
	<script>
		$(document).ready(function(){
            $('#ex3').zoom({ on:'click' });		
	
		});
	</script>
<?php include"login.php";
 ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoping";
$x=$_POST["lastname"];
$xx="";
$price=0;
    $y=$_POST["firstname"];
                $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
    
} else {
    
}
$sql = "SELECT * FROM clothing where SUB_SUB_CATEGORY_ID='w3cl1ssl4' AND BRAND='".$y."' and COLOR='".$x."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
echo "<div class='row'>";
    while($row = $result->fetch_assoc()) {


    $price=$row["SELLING_PRICE"];
    $brand=$row["BRAND"];
        $ta=$row["tiny_image_a"];
                
        $la=$row["large_image_a"];
            $model=$row["NAME"];
    $real=$row["LIST_PRICE"];
        $discount=$row["DISCOUNT"];
    }

}
        ?>

<div class="container">
	<div class="row" style="background-color:white" >
			<div class="col-md-4"  >
			
<?php
                echo"<span class='zoom' id='ex3'>
		<img src='http://localhost:7777/project/duplicate/salwar_suit/".$la."' width='175' height='320' alt='Daisy on the Ohoopee'id='imageid1' style='position:center'/>
	</span>";
    ?>
			<p style="height:20px">
			</p>
			

		<script>
                function first1(){
                    <?php
echo"document.getElementById('imageid1').src=http://localhost:7777/project/duplicate/salwar_suit/".$la.";"; ?>
                }
    
                function first2(){
               <?php
echo"document.getElementById('imageid1').src=http://localhost:7777/project/duplicate/salwar_suit/".$la.";"; ?>
                  }
                </script>
                
			
	<div class="jumbotron" style="height:120px;width:500px;background-color:white">

    <div class="row">
	<div class="col-md-1">
	<span class="glyphicon glyphicon-circle-arrow-left"  style="align:center;position:left" ></span></div>
    <div class="col-md-3">
      <a class="thumbnail">
            <?php
                echo"<img src='http://localhost:7777/project/duplicate/salwar_suit/".$ta."' alt='earing' onclick='first1()' style='width:150px;height:100px' class='thumbnail'/>";
    ?>
    
      </a>
    </div>
	
   <div class="col-md-3">
      <a  class="thumbnail">
        <?php
                echo"<img src='http://localhost:7777/project/duplicate/salwar_suit/".$ta."' alt='earing' onclick='first2()' style='width:150px;height:100px' class='thumbnail'/>";
    ?>
		
      </a>
    </div>
	 	<div class="col-md-1">
	   <span class="glyphicon glyphicon-circle-arrow-right" style="align:center;position:center" ></span></div>

	  

  </div>
</div>		
					
			
			
			</div> <!--col-->
			
			
			<div class="col-md-8" id="abc">
			<h2 class="arc">Product's name:<?php echo $brand." ".$model; ?></h2>
			<hr>
			
			<div class="row">
					<div class="col-xs-5">
					<ul class="er">

				    <li> Display:5.5 Inch HD Display </li>
				    <li>Camera: 13MP|5MP</li>
				    <li> Battery:3000 mAh</li>
				    <li>Supports MixRadio</li>
					</ul>
					</div>
			
					<div class="col-xs-4">
					<h5><b> <u>Warranty </u> </b></h5><br>
					1 Year Manufacturer Warranty
					
					</div>
						
			</div>
			<hr>
			<div class="row">
			<div class="col-xs-2"><font style="text-decoration:line-through"><?php echo "Rs. ".$real; ?> </font></div>    
			<div class="col-xs-3">	
			<font style="font-size:15px"><?php echo $price; ?></font> 		
                <font color="green"><?php echo"(".$discount." off)"; ?></</font>
			</div> 	
			
			</div>
		    
			<hr>
			
			<h3><font color="black">select color</font></h3>
			
  
  <div class="btn-group" id="qwe">
    <button type="button" class="btn btn-default"><a href="#" style="hover:red" data-toggle="tooltip" title="Hooray!">white<a></button>
    <button type="button" class="btn btn-default"><a href="#">black</a></button>
    <button type="button" class="btn btn-default"><a href="#">Silver</a></button>
	<button type="button" style="text-decoration:line-through" class="btn btn-default"><a href="#">Metallic Grey</a></button>
	<button type="button" class="btn btn-default" style="text-decoration:line-through"><a href="#">Copper Gold</a></button>
  </div>

			<hr>
			
			<div  class="well well-sm" style="width:700px">
			<span class="glyphicon glyphicon-map-marker gh" ></span><font style="color:black;size:25px">Available with 1 seller at " " <a href="#" style="text-color:green">Change</a></font>
				</div>
			
			 <div class="btn-group">
			 <div class="b">
    <button type="button" class="btn btn-warning" style="width:150px;background-color:#A9A9F5;border-radius:10px;border-color:#5858FA"><a href="#" ><p style="color:black;font-size:20px">Add to Cart</p><a></button>
			</div>
			</div>
			
			<br>
			
			
			 <div class="btn-group">
    <button type="button" class="btn btn-success" style="width:150px;background-color:#E0E0F8;border-radius:10px;border-color:#088A08"><a href="#"><p style="color:#088A08;font-size:20px">Buy It Now</p><a></button>
			
			</div>
</div>

	</div>
	
	</div>
	
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>




<?php
echo"</br>";
echo"</br>";
echo"</br>";
       include("../includes/layout/footer.php");
       ?>







