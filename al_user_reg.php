
<?php
if (isset($_REQUEST["btnregister"])) {
    $user = $_REQUEST["txtname"];
    $pass = $_REQUEST["txtpass"];
    $confirmpass = $_REQUEST["txtcpass"];
    $batch = $_REQUEST["batch"];
    $branch = $_REQUEST["branch"];
    $gender = $_REQUEST["gender"];
    $email = $_REQUEST["txtemail"];
    $contact = $_REQUEST["txtcontact"];
    $sec_qus = $_REQUEST["txtsec_question"];
    $sans = $_REQUEST["txtans"];
    if ($pass == $confirmpass) {
        include 'al.php';
        $qry = "INSERT INTO registation
            (Username,email, password,phone,Gender,batch,Branch,sec_qus,ans) 
             VALUES ('" . $user . "','" . $email . "'
                ,'" . $pass . "',
                    '" . $contact . "','" . $gender . "','" . $batch . "'
                ,'" . $branch . "',
                    '" . $sec_qus . "','" . $sans . "'
                )";
        //echo $qry;
        if (mysqli_query($con, $qry)) {
            echo"<h1>Data Saved Successfully</h1>";
            
            //header("location:user_login.php");
        } else {
            echo "Error occured " . mysqli_error($con);
        }
    } else {
        echo"Password and Confirm Password did not matched";
    }
}
?>
<html><body><!DOCTYPE html>
    <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>ITM Alumnus</title>

            <!-- Bootstrap Core CSS -->
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!-- Theme CSS -->
            <link href="css/alumni.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        </head>

        <body id="page-top" class="index">
            <div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

            <!-- Navigation -->
            <nav id="mainNav" class="navbar navbar-default navbar-custom">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.php"><img class="img-responsive" src="img/logo.png"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="page-scroll">
                                <a href="index.php#page-top">Home</a>
                            </li>
                            <li class="page-scroll">
                                <a href="index.php#about">About</a>
                            </li>
                            <li class="page-scroll">
                                <a href="event.php">Events</a>
                            </li>
                            <li class="page-scroll">
                                <a href="member.php">Members</a>
                            </li>
                            <li class="page-scroll">
                                <a href="gallery.php">Gallery</a>
                            </li>
                            <li class="page-scroll">
                                <a href="index.php#contact">Contact</a>
                            </li>
                            <li class="page-scroll login">
                                <a class="btn btn-success navbar-btn" href="user_login.php">Login</a>
                            </li>
                            <li class="page-scroll register">
                                <a class="btn btn-success navbar-btn" href="al_user_reg.php">Register</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

            <!-- Contact Section -->
            <section id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>Register</h2>
                            <hr class="star-primary">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                            <form name="registerForm" id="registerForm" method="post"action="al_user_reg.php" >

                                <fieldset>
                                    <legend>Personal Details:</legend>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" placeholder="Username" name="txtname" id="username" required data-validation-required-message="Please enter your username.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" placeholder="Password" name="txtpass" id="password" required data-validation-required-message="Please enter your password.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label for="password">Confirm Password:</label>
                                            <input type="password" class="form-control" placeholder="Password" name="txtcpass" id="password" required data-validation-required-message="Please enter your password.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label for="emailaddress">Email Address</label>
                                            <input type="email" class="form-control" placeholder="Email Address" name="txtemail" id="emailaddress" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label for="mobile">Mobile</label>
                                            <input type="text" class="form-control" placeholder="Mobile" name="txtcontact" id="mobile" required>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>


                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender" class="form-control" required>
                                                <option value="">-- Select --</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Transgender">Transgender</option>
                                            </select>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>

                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label for="batch">Batch:</label>
                                            <select name="batch" id="degree" class="form-control" required>
                                                <option value="0">--Select--</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
					       <option value="2015">2015</option>
                                        
                                                
                                             
                                            </select>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label for="branch">Branch</label>
                                            <select name="branch" id="branch" class="form-control" required>
                                                <option value="">-- Select --</option>
                                                <option value="C.S.E">Computer sicnces Engg</option>
                                                <option value="E.E.">Electronic Engg</option>
                                                <option value="Civil">Civil Engg</option>
                                                <option value="Mac">Mac Engg</option>
                                                <option value="B.C.A">BCA</option>
                                            </select>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label for="security_q">security question:</label>
                                            <select name="txtsec_question" id="branch" class="form-control" required>
                                                <option value="">-- Select --</option>
                                                <option value="Enter your Qulification">Enter your Qulification</option>
                                                <option value="what is your first vechile reg.no">what is your first vechile reg.no</option>
                                                <option value="where is your father's birth place?">where is your father's birth place?</option>
                                                <option value="what is favirote color?">what is favirote color?</option>
                                                <option value="what is college enroll no?">what is college enroll no?</option>
                                               
                                            </select>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>


                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Ans</label>
                                            <input type="text" class="form-control" placeholder="Ans" name="txtans" id="wl_city" required>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                </fieldset>
                                   <div class="row">
                                    <div class="form-group col-xs-12">
                                        <button type="submit" name="btnregister" id="registerme" class="btn btn-success pull-right btn-lg">Register</button>
                                    </div>
                                </div>  <?php
if (isset($_REQUEST['btnregister'])) {
    if (empty($_REQUEST['txtname']) | empty($_REQUEST['txtpass']) | empty($_REQUEST['txtcpass']) | empty($_REQUEST['batch']) | empty($_REQUEST['branch']) | empty($_REQUEST['txtgender']) | empty($_REQUEST['txtemail']) | empty($_REQUEST['txtcontact']) | empty($_REQUEST['txtsec_question']) | empty($_REQUEST['txtans'])) {
        echo '<p>fill the required fields</p>';
    } else {
        echo '<p> submit </p>';
    }
}
?>
                            </form>
                        </div>
                    </div>
                </div>
            </section>





            <!-- Footer -->
            <footer class="text-center">
                <div class="footer-above">
                    <div class="container">
                        <div class="row">
                            <div class="footer-col col-md-4">
                                <h3>Location</h3>
                                <p>New Raipur Uprawara 492015
                                    <br>C.G.</p>
                            </div>
                            <div class="footer-col col-md-4">
                                <h3>Follow Us</h3>
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-social btn-outline"><span class="sr-only">Instagram</span><i class="fa fa-fw fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-col col-md-4">
                                <h3>About ITM</h3>
                                <p>ITM is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-below">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                Copyright &copy; Your Website 2017
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
            <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
                <a class="btn btn-primary" href="#page-top">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>

            <!-- jQuery -->
            <script src="vendor/jquery/jquery.min.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

            <!-- Plugin JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

            <!-- Contact Form JavaScript -->
            <script src="js/jqBootstrapValidation.js"></script>
            <script src="js/contact_me.js"></script>

            <!-- Theme JavaScript -->
            <script src="js/freelancer.min.js"></script>

        </body>

    </html>



