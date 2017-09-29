<?php
 session_start(); 
 $conn=mysqli_connect("localhost","root","21122012s","login");           //connecting to database named login
 if(!$conn)
 {
 die("connection failed: ".mysql_connect_error());
 } 
 $first=$_SESSION['firstname']; $last=$_SESSION['lastname'];                //insert values in database
 $batch=$_POST['batch'];$date=$_POST['date'];
 $month=$_POST['month']; $yy=$_POST['yy'];
 $city=$_POST['city'];$mob=$_POST['mob'];
 $Emailid=$_SESSION['Emailid'];
 $address=$_POST['address'];$ps=$_POST['ps'];
 $sql="INSERT INTO alumni(Fname,lname,batch,dd,mm,yy,city,mobileno,Emailid,address,presentst) 
 VALUES('$first','$last','$batch','$date','$month','$yy','$city','$mob','$Emailid','$address','$ps')";
  $result = $conn->query($sql);
  mysqli_close($conn);
 if($_POST['ps']==='studying')
   {
    echo '<div id="educationaldetails">
  <form action="submitform.php" method="POST">
   <p>EDUCATION DETAILS</p>
   <p>COLLEGE<input type="text" id="college" name="college" required/>DEGREE<input type="text" id="degree" name="degree" required/></p>
   <p>STREAM<input type="text" id="stream" name="stream" required/>SEM<input type="text" id="sem" name="sem"/></p>
  <p>YEAR OF JOINING<input type="text" id="year" name="year"/></p>
  <p><input type="submit" id="btn2" value="SUBMIT"</p>
 </form>
 </div>';
  }
  else
  if($_POST['ps']==='working')
  {
  echo '<div id="educationaldetails">
  <form action="submitform.php" method="POST">
  <p>EMPLOYMENT DETAILS</p>
  <p>ORGANIZATION NAME:<input type="text" id="org" name="org" required/>
   DESIGNATION<input type="text" id="desg" name="desg" required/></p>
  <p>OFFICE ADDRESS<input type="text" id="offadd" name="offadd"/> 
   SALARY<input type="text" name="sal" id="sal"></p>
    <p><input type="submit" id="btn3" value="SUBMIT"</p>
 </form>
 </div>';
   }
 ?>