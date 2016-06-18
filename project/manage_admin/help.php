<?php
include("/useful.php");
?>
<link rel="stylesheet" href="jscript/chelp.css">
<div></br></br></br></div>
<div></br></br></br></div>
<?php include"login.php";
 ?>
<div class="container">

    <div class="row ">

<div class="col-xs-2 col-sm-2">
<div id="list4">
   <ul>
      <li  onclick="hmyFunction1()" onload="hmyFunction1()"><a href="#" id="p1"><strong>Payments</strong></a></li>
      <li  onclick="hmyFunction2()"><a href="#"id="p2"><strong>Saved Cards</strong></a></li>
      <li ><a onclick="hmyFunction3()"href="#"id="p3"><strong>Shipping</strong></a></li>
      <li  onclick="hmyFunction4()"><a href="#" id="p4"><strong>Cancellation & Returns</strong></a></li>
       <li  onclick="hmyFunction5()"><a href="#"id="p5"><strong>FAQ</strong></a></li>
    </ul>
</div>
    
    </div>
    <div class="col-xs-10 col-sm-10 pdiv">
<h1 id="hpayment" ></h1>
<p id="hppayment"></p>
</div>
 
    </div>
    <script type="text/javascript" src="jscript/jhelp.js"></script>
</div>
<?php
echo"</br>";
echo"</br>";
echo"</br>";
       include("../includes/layout/footer.php");
       ?>