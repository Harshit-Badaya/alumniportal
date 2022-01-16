<?php session_start();
if(isset( $_SESSION["username"])){
    include 'al.php';
    $qry="select *form registation WHERE Username='" . $_SESSION["username"]. "' ";

   mysqli_query($con, $qry);
   $qry1="select * fROM message WHERE receiver='".$_SESSION["username"]."'";
   $res = mysqli_query($con, $qry1);
  if(mysqli_affected_rows($con)>0)
    { 
            $i=0;
            while($sow= mysqli_fetch_array($res))
            {

            $i++;
            }
            //echo $i;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
	<style>
            
#menu4
{
width:100%;
height:400px;
background-color:#ffffff;
background-image: url('img/navbar.jpg');
color:#ffffff;

padding:10px 10px;
font-weight:bold;
text-decoration:none;
display:inline-block;
} 
#menu4 ul li
{font-size:18px;
width:300px;
}
            
#menu4 ul li:hover ul
{
display:block;
color:blueviolet;
position:absolute;
top:40px;
width:140px;}
#menu4 ul li a:hover{
background-color:#AF4970;
color: white;
text-decoration:underline;}
</style>
    </head>
    <body> 
         
        <?php
        include 'user.html';
        
       echo "<h1>Welcome, ".$_SESSION["username"]."</h1>";
       
        ?>
        <div id="menu1_in" width="800px"height="300px">
            
            
           
		</div>
		
        
<div id="menu4">
<div id="menu_in1">
    <img src="img/81.jpeg" style="float: right;height: 200px;margin-bottom: 600px;">
<ul>
<li><img src="img/icon1.png" style="float: left;height: 35px;"><h2><a href='profile.php?id=<?php echo $_SESSION["username"];?>'>Profile</a></h2></li>
<li><img src="img/icon1.png" style="float: left;height: 35px;"><h2><a href="search.php">Search</a></h2></li>

<li> <img src="img/icon1.png"style="float: left;height: 35px;"><h2><a href='insert.php?id=<?php echo $_SESSION["username"];?>'>Message</a></h2></li>
<li><img src="img/icon1.png" style="float: left;height: 35px;"> <h2><a href="logout.php">Sign out</a></h2></li>
</ul>
</div>
</div>
<?php
include 'footer.html';
   }

else
{
    header("Location:user_login.php");
}
?>

