<?php session_start();
if(isset( $_SESSION["username"])){
    include 'al.php';
    $user=$_SESSION["username"];
    $qry="select * from registation WHERE Username='".$user. "'";
  //echo $qry;
  $sql= mysqli_query($con, $qry);
   $row=mysqli_fetch_array($sql);
   $uid=$row['Id'];
   echo $uid;
if(isset($_REQUEST["btnupdate"])) {
    $user = $_REQUEST["txtname"];
    $batch = $_REQUEST["batch"];
    $branch = $_REQUEST["branch"];
    $degree = $_REQUEST["degree"];
    $dob = $_REQUEST["Y-m-d"];
    $Gender = $_REQUEST["gender"];
    $email = $_REQUEST["emailaddress"];
    $contact = $_REQUEST["txtcontact"];
    $address = $_REQUEST["txtaddress"];
    $city = $_REQUEST["txtcity"];
    $final=$_REQUEST["final"];
    $Employment=$_REQUEST["Employment"];
     $imagename=$_REQUEST['profilepicture']; 
     $Id=$_REQUEST["user"];
     include 'al.php';
 $qry1="UPDATE `registation` SET `Username` = '$user', `Email` = '$email', `address` = '$address ', "
         . "`phone` = '$contact', `Gender` = '$Gender', `batch` = '$batch', `Branch` = '$branch', `dob` = '$dob',  "
         . "`img` = 'dj.jpg', `c_city` = '$city', "
         . "`final` = '$final', `degree` = '$degree', `Employment` = '$Employment' WHERE `registation`.`Id` = $Id"; 

 //echo $qry1;
  mysqli_query($con, $qry1);
  
echo "<script>alert('Your Profile updated Successfully');</script>";
 header("location:welcome_al_user.php");
    }

else{
    echo 'not update';

}
include 'user.html';
?> 


<!DOCTYPE html>
 <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Profile</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="registerForm" id="registerForm" method="post" action="profile.php">
                    
                        <fieldset>
                            <legend>Personal Details:</legend>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" value="<?php echo $_SESSION["username"];?>" name="txtname" id="username" required data-validation-required-message="Please enter your username.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="emailaddress">Email Address</label>
                                    <input type="email" class="form-control" value="<?php echo $row['Email'];?>" name="emailaddress" id="emailaddress" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                             <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control" value="<?php echo $row['phone'];?>" placeholder="#"name="txtcontact" id="mobile" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                           
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="profilepicture">Profile Picture</label>
                                    <input type="text" value="load/Student.png" name="profilepicture" id="profilepicture" >
                                    <p class="help-block text-danger"></p>
                        
                                </div><div style="float: right;"><?php //if(isset($_REQUEST['btnupdate'])){
                                    //$target="load/".basename($_FILES['profilepicture']['name']);
                                 
                                   // $image=$_FILES['profilepicture"']['name'];
                                    //$sql="INSERT INTO registation(img)VALUES($image)";
                                   // mysqli_query($CON, $sql);
                                    //if(move_uploaded_file($_FILES['tmp_name']['name'],$target))
                                   // { echo 'uploaded';}else{echo"bhhuhbb";}
                                    
                                   // echo"profile pic'$image'<br/><img src='$image' width=100 height=100 />";
                               /// }?></div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control" required>
                                      <option value="<?php echo $row['Gender'];?>"><?php echo $row['Gender'];?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Transgender">Transgender</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="DOB">Date Of Birth</label>
                                    <input type="date" class="form-control"placeholder="YYYY/MM/DD" value="<?php echo $row['dob'];?>" name="Y-m-d" id="username" required data-validation-required-message="Please enter your date of birth.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            
                        </fieldset>
                        <fieldset>
                            <legend>Education Details:</legend>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="degree">Degree</label>
                                    <select name="degree" id="degree" class="form-control" required>
                                        <option value="<?php echo $row['degree'];?>"><?php echo $row['degree'];?></option>
                                        <option value="">--Select--</option>
                                       <option value="B.Tech">B.Tech</option>
                                        <option value="B.Arch">B.Arch</option>
                                         <option value="B.B.A.">BBA</option>
                                      
                                       
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="branch">Branch</label>
                                    <select name="branch" id="branch" class="form-control" required>
                                         <option value="<?php echo $row['Branch'];?>"><?php echo $row['Branch'];?></option>           
                                        <option value="">-- Select --</option>
                                        <option value="C.S.E">CSE</option>
                                        <option value="mac">mac</option>
                                        <option value="CIVIL">civil</option>
                                        <option value="E.E.">EE</option>
                                        <option value="B.C.A.">CA</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="yera">Branch</label>
                                    <select name="batch" id="branch" class="form-control" required>
                                         <option value="<?php echo $row['batch'];?>"><?php echo $row['batch'];?></option>           
                                        <option value="">--Select--</option>
                                        <option value="2012">2012</option><option value="2013">2013</option>
                                        <option value="2014">2014</option><option value="2015">2015</option>
                                        <option value="2016">2016</option><option value="2017">2017</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="year">Year of Completion</label>
                                    <select name="final" id="year" class="form-control" required>
                                        <option value="<?php echo $row['final'];?>"><?php echo $row['final'];?></option>
                                        <option value="">--Select--</option>
                                        <option value="2012">2012</option><option value="2013">2013</option>
                                        <option value="2014">2014</option><option value="2015">2015</option>
                                        <option value="2016">2016</option><option value="2017">2017</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            
                            <b class="text-warning">Present Status :</b>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="emptype">Employment Type</label>
                                    <select name="Employment" id="emptype" class="form-control" required>
                                        <option value="<?php echo $row['Employment'];?>"><?php echo $row['Employment'];?></option>
                                        <option value="">--Select--</option>
                                        <option value="Salaried">Salaried</option>
                                        <option value="Own">Entrepreneur</option>
                                        <option value="housewife">HouseMaker</option>
                                        <option value="Unemployed">Yet to be Placed</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        
                        
               <b class="text-warning">Work Location :</b>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="country">Address</label>
                                    <input type="text" class="form-control" value="<?php echo $row['address'];?>" name="txtaddress" id="wl_country" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                     </div>
                      <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="country">Current City</label>
                                    <input type="text" class="form-control" value="<?php echo $row['address'];?>" name="txtcity" id="wl_country" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                     </div>
                      
                            <input type="hidden" name="user" value="<?php echo $uid;?>">
                           
                           </fieldset>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" name="btnupdate" id="registerme" class="btn btn-success pull-right btn-lg">UPDATE</button>
                                <!-- <input type="hidden" value="<?php //echo base64_decode($_REQUEST["Id"]);  ?>" name="txthidden">-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

     



<?php include 'footer.html';}
 else {
     echo"bahubali3";
 }?>
