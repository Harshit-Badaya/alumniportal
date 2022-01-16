<?php session_start();
 include 'al.php';
 if(isset($_REQUEST["id"]))
 {
   $fid=($_REQUEST["id"]);  
   $qry="select * from registation WHERE Id='".$fid. "'";
 $sql= mysqli_query($con, $qry);
   $row=mysqli_fetch_array($sql);
   $ruser =$row['Username'];
 }
 
 $uid=$_SESSION["username"];
 
?>
<center>
        <?php    include 'user.html';
        // put your code here
        ?>
        <form metdod="post"action="chatbox.php">
            <input type="hidden" name="recid" value="<?php echo $fid;?>">
              <input type="hidden" name="recname" value="<?php echo $ruser;?>">
            <!--username: <?php// echo$uid."    send   to     ". $ruser;?> <br/>-->
            
            <!--reciver-->
            Your message:
            <br>
            <textarea name="msg" required></textarea ><br/>
            <br/>
            <input type="submit"name="btnsend"style="width:200px;"  value="send"></>
            
            <?php
            if(isset($_REQUEST["btnsend"])) {
                //$rfid=$_REQUEST[$ruser];
    
    $msg = $_REQUEST["msg"];
    $recid = $_REQUEST["recid"];
    $recname = $_REQUEST["recname"];
     //$date=date('Y-m-d h:i:s:a');
   include 'al.php';
   $qry1="INSERT INTO `message` (`message`, `date`, `send`, `receiver`) VALUES ('$msg', now(), '$uid', '$recname')";
//echo $qry1;
   if($sql= mysqli_query($con, $qry1))
{   
    echo "<script>alert('Message sent to ".$recname." from ".$uid."');</script>";
    $query= mysqli_query($con,"select*from message ORDER BY uid DESC");
  
        echo"<table cellspacing='0' cellpadding='0' border='1' align='center'>";
        echo"<tr style='background-color:#336699;color:#ffffff;'>
            <td>Sender</td>
            <td>Message</td>
            <td>Date/Time</td>
            <td>Rec.</td>
            
            </tr>
            ";
        $i=1;
        while($sow= mysqli_fetch_array($query))
        {
            if($i%2==0)
            {
      echo"<tr style='background-color:#ccbccc;'>";
                
            }
            else
            {
     echo"<tr style='background-color:#ffffff;'>";
            
            }
             
            echo "<td>".$sow["send"]."</td>";
            echo "<td>".$sow["message"]."</td>";
            echo "<td>".$sow["date"]."</td>";
            echo "<td>".$sow["receiver"]."</td>";
           
     echo"</tr>";
     $i++;
        }
      echo"</table>";
        
            
            }
 else {
     echo "Error ". mysqli_error($con);
 }
            
            } else {
    
    echo 'no message';}
            
?>
   
    
    
    
            
           
            
        </form></center>
    </body>
</html>
