<?php session_start();
 include 'al.php';
 include 'user.html';
 if(isset($_REQUEST["id"]))
 { 


$query= mysqli_query($con,"select*from message WHERE receiver='".$_SESSION['username']."'");
  
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
 }else{
     echo 'no messages';
 } ?>
            