<?php
   if(isset($_REQUEST["btnadd"]))
       {
    $evnt = $_REQUEST["txtevent"];
    $bio = $_REQUEST["e_details"];
    $stdate = $_REQUEST["date_Evnt"];
    $endate = $_REQUEST["date_end"];
    include '../al.php';
    $qry="INSERT INTO addevent ('name','details','startdate','enddate')"
            . "VALUES('.$evnt.','.$bio.','.$stdate.','.$endate.')";
    echo $qry;
    mysqli_query($con, $qry);
       }
?>
<html>
    <head>
        <title> Events </title>
        
    </head>
    <body>
    <center>
    <h1> Add Event </h1>
    <form>
        <label>Enter Event Name</label>
        <input type="text" name="txtevent" value=""><br/>
        <label>Enter details </label>
        <input type="" name="e_details"value=""><br/>
        <label> Date of Events</label>
        <input type="date" name="date_Evnt" value="" placeholder="dd/mm/yyyy"><br/>
        <label>End Event</label>
        <input type="date" name="date_end"value=""placeholder="dd/mm/yyyy">
        <input type="submit"name="btnadd" value="add">
        
    </form> </center>
    
    </body>
    
</html>
<?php

   
?>