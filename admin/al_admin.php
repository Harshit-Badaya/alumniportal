<?php 
 include '../al.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <div><center>
                <img src="../img/admin_login.gif"/></center>
        </div>

        <?php
        if (isset($_REQUEST['btnlogin'])) 
        {
            $user = $_REQUEST["txtuser"];
            $pass = $_REQUEST["txtpass"];
             //include '.php';
             //$con = mysqli_connect("localhost", "root", "", "almuni") or die("Sorry!!!Cannot Connect");
       
            $qry = "SELECT * FROM al_admin_login WHERE Username='" . $user . "' AND Password='" . $pass . "'";
           //echo $qry;
            $sql=mysqli_query($con, $qry);
            if(mysqli_num_rows($sql)>0) 
                    
            {
                $row=mysqli_fetch_assoc($sql);    
               
                header("location:welcome_al_admin.php");
            }        
                else 
                    {
                echo"Invalid Username or password..!!";
                header("location:al_admin.php");
                     }
        }
        ?>


        <form name="form1" method="GET" action="al_admin.php">
            <table align="center">
                <tr>
                    <td>
                        Username :</td>
                    <td>
                        <input type="text" name="txtuser"></td>
                </tr>
                <tr>
                    <td>
                        Password :</td>
                    <td>
                        <input type="password" name="txtpass"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btnlogin" value="login">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>