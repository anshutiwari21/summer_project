<?php
include("/useful.php");
?>
 <link rel="stylesheet" href="style.css"> 
	<link rel="stylesheet" href="des.css">
</br>

</br>
</br>
</br>
<div class="container"
     >
	<div class="row" style="background-color:white" >
			<div class="col-md-4"  >
			
			<img src="ef.jpeg" style="position:center" id="headimage">
			
			
			<div class="container">
	<div class="jumbotron" style="height:120px;width:500px;background-color:white">

    <div class="row">
	<div class="col-md-1">
	<span class="glyphicon glyphicon-circle-arrow-left"  style="align:center;position:left" ></span></div>
    <div class="col-md-3">
     
        <a onclick="ashish()" class="thumbnail">
            
        <img src="phoneback.jpeg" alt="earing" style="width:150px;height:100px" class="thumbnail" >
		
      </a>
         <script type="text/javascript">
        function ashish(){
            
            document.getElementById('headimage').src="phoneback.jpeg";
        }
             
              function ashish1(){
            
            document.getElementById('headimage').src="ef.jpeg";
        }
        </script>
    </div>
	
   <div class="col-md-3">
      <a onclick="ashish1()" class="thumbnail">
            
        <img src="ef.jpeg" alt="earing" style="width:150px;height:100px" class="thumbnail" >
		
      </a>
    </div>
	 	<div class="col-md-1">
	   <span class="glyphicon glyphicon-circle-arrow-right" style="align:center;position:center" ></span></div>

	  
    </div>
  </div>
</div>		
					
			
			
			</div> <!--col-->
			
			
			<div class="col-md-8" id="abc">
			<h2 class="arc">Product's name</h2>
		
			
	</div>
	</div>
	
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
	
	</body>
	</html>