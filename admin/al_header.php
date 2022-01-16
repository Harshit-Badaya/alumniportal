<?php session_start();
 include '../al.php';
if(isset( $_SESSION["username"]))
{
?>

<!doctype>
<html>
    <head><link rel="stylesheet"href="style.css"></head>
    <body>
        
        
        div id="menu1">
<div id="menu1_in">
<ul>
   <li><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>MyHealth</a></li>
   <li><a href="#"><i class="fa fa-mobile" aria-hidden="true"></i></i>Contact</a></li></ul>
</div></div><center>
<div id="img"><h2>Health website</h2><div id="img1"><img src="img/ecg1.png"  height="50px" /><img src="img/ecg1.png"  height="50px" /><img src="img/ecg1.png"  height="50px" /></div></div>
<div id="menu">
<div id="menu_in">
<ul>
    <li><a href="welcome_al_admin.php"><i class="fa fa-plus-square" aria-hidden="true"></i>Home</a></li>
<li><a href="add-record"><i class="fa fa-plus-square" aria-hidden="true"></i>add records</a></li>
<li><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>Products</a></li>
<li><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>Clints</a></li>
<li><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>Contact</a>
<ul>
     <li><a href="#">contact2</a></li>
    </ul></li>	
</ul>
</div>
</div>
<div id="page"><i class="fa fa-quote-left fa-5x" aria-hidden="true"></i>Dig the well before you are thirsty!
<i class="fa fa-quote-right fa-5x" aria-hidden="true"></i><br><br><h3>
b,hg,h,b,c,gccghvbvbkg.jkvhvnmvbvcgcjghv bn,gxhfxfbchxsdytrluyftydrstsgchgchgd</h3><br>
</div><div class="help"><h6> hhhhhhhhhhhhhhhhhhhhhhhhhh </h6></div>
<div id="footer"><p>copyright &copy; 2017Health website</p></div>


        
        
    </body>
</html>>






















<?php
}
else
{
    header("Location:al_admin.php");
}
?>


