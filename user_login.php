<?php session_start();

?>
<?php 
 include 'userlog.html';
?>
<!DOCTYPE html>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
   <?php
        if(isset($_REQUEST['btnlogin'])) 
        {
            $user = $_REQUEST["txtuser"];
            $pass = $_REQUEST["txtpass"];
             include 'al.php';
             //$con = mysqli_connect("localhost", "root", "", "almuni") or die("Sorry!!!Cannot Connect");
       
            $qry = "SELECT * FROM `registation` WHERE Username='" . $user . "' AND Password='" . $pass . "'";
           echo $qry;
            mysqli_query($con, $qry);
            if(mysqli_affected_rows($con)>0) 
                    
            {
                    
                $_SESSION["username"] = $user;
                header("location:welcome_al_user.php");
            }        
                else 
                    {
                echo"Invalid Username or password..!!";
                header("location:user_login.php");
                     }
        }
        ?>
  <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Login</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="loginForm" id="loginForm" method="post" action="user_login.php">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="txtuser" id="username" required data-validation-required-message="Please enter your username.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="txtpass" id="password" required data-validation-required-message="Please enter your password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" name="btnlogin" id="loginme" class="btn btn-success pull-right btn-lg">Login</button>
                                
                                
                       <br><a class="btn btn-success navbar-btn" href="al_user_rpass.php">Forgot password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

        <?php
        include 'footer.html';
        ?>
    