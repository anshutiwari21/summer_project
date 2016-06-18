<?php
include("../includes/layout/header.php");
?>
<style type="text/css">
    <?php
        include "flexslider.css";
        ?>
</style>
<?php
include("category.php");
?>
</br>
</br>
</br>
</br>
<?php include"login.php";
 ?>    <div class="container">
<div class="container flexslider ll">
  <ul class="slides">
    <li>
      <a href="https://localhost/project/duplicate/manage_admin/laptop.php#">
          <img src="a.jpg" />
      </a>
    </li>
    <li>
        <a href="https://localhost/project/duplicate/manage_admin/mobile.php#">
      <img src="b.jpg" /></a>
    </li>
    <li>
        <a href="https://localhost/project/duplicate/manage_admin/mobile.php#">
            <img src="c.jpg" /></a>
    </li>
    <li><a href="https://localhost/project/duplicate/manage_admin/mobile.php#">
        <img src="d.jpg" /></a>
    </li>
  </ul>
</div>  
<?php include("offer.php"); ?>    
<script type="text/javascript"> <?php include "jquery.flexslider-min.js";
    ?>
</script>       
<script>
    $(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
}); 
    </script>
    </div>
<?php
echo"</br>";
echo"</br>";
echo"</br>";
       include("../includes/layout/footer.php");
       ?>