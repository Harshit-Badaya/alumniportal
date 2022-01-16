<?php session_start();
 include 'header.html';
?>

     <?php    
        
     if (isset($_REQUEST['btnsub'])) 
         {   $email = $_REQUEST["email"];

             $sque = $_REQUEST["sque"];
            $qans = $_REQUEST["qans"];
             
            include 'al.php';
            $qry = "SELECT *FROM registation WHERE email='" . $email . "' AND ans='" . $qans . "'";
            //echo $qry;
            mysqli_query($con, $qry);

            if (mysqli_affected_rows($con) > 0)
                {
                $_SESSION["email"] = $email;

                header("location:newpass.php");
                
            } 
            else
                {
                echo"Invalid Answer And Registered Contact No...!!";
                header("location:al_user_rpass.php");
            }
     }
     
            ?>
   

            <form name="forgot" action="al_user_rpass.php" >
                <table align="center" >
                    <tr><td><label><b>Email:</b><input type="text" class="form-control" name="email" required data-validation-required-message="Please enter your username." value="" required data-validation-required-message="Please enter your email."/></label>
</td></tr>
                    <tr>
                        <td> <br/>
                            <label><b>Security Question:</b></label>
                            <select name="txtsec_question" class="form-control" size="1"required data-validation-required-message="Please enter your question.">
                                <option>---Select---</option>
                                <option>what is your first vechile reg.no</option>
                                <option>where is your father's birth place?</option>
                                <option>what is favirote color?</option>
                                <option>what is college enroll no?</option>
                                <option>what is fav pastime hobby?</option>
                            </select>
                        </td> 
                    </tr>
                    <tr>
                        <td> <br> <label><b>Answer:</b></label>
                            <input type="text" name="qans" value=""class="form-control" required data-validation-required-message="Please enter your ans." />
                        </td> 
                    </tr><br/>
                    <td> <br><input type="submit" value="Submit" name="btnsub" /></td>
                </table>
            </form>


<?php include 'footer.html';?>
 

