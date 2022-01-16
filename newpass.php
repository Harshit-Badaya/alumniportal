<?php session_start();
if(isset( $_SESSION["username"])){
    include 'al.php';
    $qry="select *form registation WHERE Username='" . $_SESSION["username"]. "' ";

   mysqli_query($con, $qry)

?>
        <?php
      include 'header.html';
        if (isset($_REQUEST['btnrst']))
            {
            $rpass = $_REQUEST["rpass"];
             $cpass = $_REQUEST["cpass"];
            
         
             include 'al.php';
               
            if($rpass==$cpass) 
            {
                   $qry="UPDATE registation SET Password='" . $rpass . "' where Username='".$_SESSION["username"]."'";
                       //echo $qry;
                       
                       
                        mysqli_query($con, $qry);
                
           header("location:user_login.php");
            }        
            else 
               {
             echo"Invalid Answer And Registered Contact No...!!";
            header("location:newpass.php");
               }
        

            }
        ?>
        
        
        
        
        
    
<div style="width: 100%;height: 300px;">
        <form name="forgot" action="newpass.php" >
            <table align="center" >
                <tr>
                    <td> <br>
                        <label><b>NEW PASSWORD:</b></label>
                        <input type="text" placeholder="Enter New Password"class="form-control" name="rpass"required >
                    </td> 
                </tr>
                <tr>
                    <td> 
                       <br> <label><b>RE-TYPE PASSWORD:</b></label>
                        <input type="text" placeholder="Re-Enter Password"class="form-control" name="cpass" required>
                    </td> 
                </tr>
                <tr>
                    <td> <br>
                <input type="submit" value="RESET PASSWORD" class="btn btn-success pull-right btn-lg"name="btnrst" />
                  </td> 
                </tr>
                
            </table></form>
    </div>
            <?php 
            
               }
            
else{
$_SESSION["username"]="";
session_destroy();
header("Location:al_user_reg.php");}
include 'footer.html';?>