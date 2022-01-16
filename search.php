<?php session_start();?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
                .res
                {
                    color:#fafbfc;
                    background-color: #ff0000;
                    padding: 10px;
                    text-align:center;
                    font-weight:bold;
                    box-shadow: 1px 1px 17px #666666;
                }
                


.img2{color:#ff0000;
width:100px;
height:100px;

text-align:center;
border: 1px solid #ffff00;
box-shadow:1px 1px 17px #abcdef;
border-radius:70%;
}
                </style>
    </head>
    <body>
        <?php
        include 'user.html';
        if (isset($_REQUEST["btnsearch"])) {
    $user = $_REQUEST["name"];
    $batch = $_REQUEST["batch"];
    $branch = $_REQUEST["branch"];
    $address = $_REQUEST["address"];
     include 'al.php';
             //$con = mysqli_connect("localhost", "root", "", "almuni") or die("Sorry!!!Cannot Connect");
      //1st query
        if($user!="" && $address=="" && $batch=="" && $branch=="")
          {
              $qry="SELECT * FROM registation WHERE Username='".$user."'";
            //echo $qry;
            retrieverecords($qry);
              
          }
      //2nd query
          else if($user!=="" && $address!=="" && $batch=="" && $branch=="")
          {
              $qry="SELECT * FROM registation WHERE address LIKE '%".$address."%'";
             //   echo $qry;
                   retrieverecords($qry);
          }
      //3rd
          else if($user!=="" && $address=="" && $batch!=="" && $branch=="")
          {
              $qry="SELECT * FROM registation WHERE batch='".$batch."'And Username Like'%".$user."%'";
             //   echo $qry;
                   retrieverecords($qry);
          
          }   //4th query
          else if($user!=="" && $address=="" && $batch=="" && $branch==!"")
          {
              $qry="SELECT * FROM registation WHERE Branch='".$branch."' AND Username LIKE '%".$user."%'";
             //   echo $qry;
                   retrieverecords($qry);
          } //5th 
          else if($user!=="" && $address!=="" && $batch!=="" && $branch!=="")
          {
              $qry="SELECT * FROM registation WHERE Username LIKE '%".$user."%' AND Branch='".$branch."'";
             //   echo $qry;
                   retrieverecords($qry);
          } //6th
          else if($user!=="" && $address!=="" && $batch!=="" && $branch=="")
          {
              $qry="SELECT * FROM registation WHERE Username LIKE '%".$user."%'AND batch='".$batch."'";
             //   echo $qry;
                   retrieverecords($qry);
          }//7th 
          else if($user!=="" && $address!=="" && $batch=="" && $branch!=="")
          {
              $qry="SELECT * FROM registation WHERE Username LIKE '%".$user."%' AND Branch='".$branch."'";
             //   echo $qry;
                   retrieverecords($qry);
          }
          //8th
           else if($user=="" && $address!=="" && $batch!=="" && $branch!=="")
          {
              $qry="SELECT * FROM registation WHERE address LIKE '%".$address."%' AND Branch='".$branch."'";
             //   echo $qry;
                   retrieverecords($qry);
          }
          //9th
           else if($user!=="" && $address=="" && $batch!=="" && $branch!=="")
          {
              $qry="SELECT * FROM registation WHERE Username LIKE '%".$user."%' AND Branch='".$branch."'";
             //   echo $qry;
                   retrieverecords($qry);
          }
          //10th
           else if($user=="" && $address=="" && $batch=="" && $branch!=="")
          {
              $qry="SELECT * FROM registation WHERE Branch='".$branch."' ";
             //   echo $qry;
                   retrieverecords($qry);
          }//11th
           else if($user=="" && $address=="" && $batch!=="" && $branch=="")
          {
              $qry="SELECT * FROM registation WHERE Username LIKE '%".$user."%' AND batch='".$batch."'";
             //   echo $qry;
                   retrieverecords($qry);
          }
          //12th
          else if($user=="" && $address=="" && $batch!=="" && $branch!=="")
          {
              $qry="SELECT * FROM registation WHERE  Branch='".$branch."' AND batch='".$batch."'";
             //   echo $qry;
                   retrieverecords($qry);
          }
          //13th
          else if($user=="" && $address!=="" && $batch=="" && $branch=="")
          {
              $qry="SELECT * FROM registation WHERE address LIKE '%".$address."%'";
             //   echo $qry;
                   retrieverecords($qry);
          }//14th
          else if($user=="" && $address!=="" && $batch=="" && $branch!=="")
          {
              $qry="SELECT * FROM registation WHERE address LIKE '%".$address."%'AND batch'".$batch."'";
             //   echo $qry;
                   retrieverecords($qry);
          }//15th
          else if($user=="" && $address!=="" && $batch!=="" && $branch=="")
          {
              $qry="SELECT * FROM registation WHERE address LIKE '%".$address."%'AND batch'".$batch."'";
             //   echo $qry;
                   retrieverecords($qry);
          }
          
          
          
          
          
   
          //16th
          else
          {
               $qry="SELECT * FROM registation";
               //  echo $qry;
                    retrieverecords($qry);
          }
        }
            
            function retrieverecords($sql)
            {
                include 'al.php';
       
        $result=mysqli_query($con,$sql);
            
        $i=1;
        while($row=mysqli_fetch_array($result))
        {echo "<div style='background-color:ffffff;width:800px;height:150px;padding:2px;>";
            if($i%2==0)
            {
      echo"<div style='background-color:aabbcc;width:800px;height:150px;color:red;padding:2px;'>";
                
            }
            else
            {
     echo"<div style='background-color:ccccbb;width:800px;height:125px;color:green;>";
            
            }
           // echo "<div style=width:10px;height:125;float:left;>".$row["Id"]."</div>";
            echo "<div style=width:100px;height:125px;float:left;><img src='load/Student.png' class='img2' width=110 height=135></div>";        
            echo "<div  style=width:600px;height:25px;float:left;>Name:".$row["Username"]."</div>";
            echo "<div  style=width:600px;height:25px;float:left;>Email:".$row["Email"]."</div>";
            echo "<div  style=width:600px;height:25px;float:left;>Mobile:".$row["phone"]."</div>";
            echo "<div  style= width:600px;height:25px;float:left;>Branch:".$row["Branch"]."</div>";
            echo "<div  style=width:600px;height:25px;float:left;>Address:".$row["address"]."</div>";
            echo"<div ><a href='chatbox.php?id=".$row["Id"]."'>Message</a></div>";
           
            
            echo "</div>";
            echo "</div>";
            
            
            
            
    
     $i++;
        }
        
        
        
        
        
        
        
      
        
        
        
        
            } 
        
        
        
        
        
        
        
       
               
             
                  
       
        ?> <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Search</h2>
                    <hr class="star-primary">
                </div>
            </div>
        <form name="search" action="search.php" ><center>
        
            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="username">Username</label>
                                    <input type="text" style="width:300px;align-content: center; "class="form-control" value="" name="name"placeholder="By name" id="username" >
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
               <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label for="year">Batch</label>
                                    <select name="batch"style="width:300px; " id="year" class="form-control" >
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
                                    <label for="branch">Branch</label>
                                    <select name="branch"style="width:300px; " id="branch" class="form-control" >
                                        <option value="">-- Select --</option>
                                        <option value="C.S.E">C.S.E</option>
                                        <option value="Mac">Mac</option>
                                        <option value="CIVIL">civil</option>
                                        <option value="E.E.">EE</option>
                                        <option value="B.C.A">BCA</option>
                                       
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
            <div class="form-group col-xs-12 controls">
                                    <label for="country">Address</label>
                                    <input type="text" class="form-control" style="width:300px; "value="" name="address"placeholder="By location" id="wl_country" >
                                    <p class="help-block text-danger"></p>
                                </div>
                     
              
            
        <input type="submit" style="width:200px; "value="search" name="btnsearch" /></center>
        </form>
    </body>
</html>
            <?php}}} include 'footer.html';?>


  
      
            
        
        
