<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

<link href="/assets/css/style_login_registration.css" type="text/css" rel="stylesheet" />
<title>STUDENT FORM</title>

</head>
<body>
<center>
<form action="logout.php" class="form">                                <!--logout button-->
    <button>LOG OUT</button>
 </form>

<?php
 $conn=mysqli_connect("localhost","root","21122012s","login");           //connecting to database named login
 if(!$conn)
 {
 die("connection failed: ".mysql_connect_error());
 } 
 $i=$_SESSION['Emailid'];
 $sql1="SELECT* FROM alumni WHERE Emailid='$i'";
 $result1 = $conn->query($sql1);
if (!($result1->num_rows > 0))
{?>
<div class="form"> 
 <div id="studentfrm" >
 <form action="details.php" method="POST" class="form">
  <p>PERSONAL DETAILS</p>
  <p>FIRSTNAME: <?php echo$_SESSION['firstname'];?></p>
   <p>LASTNAME: <?php echo$_SESSION['lastname'];?></p>
 <p>BATCH<select name="batch" id="batch">
    <?php for ($i = 1; $i <= 70; $i++) : ?>
        <option value="<?php echo (2001+$i).'-'.(2001+($i+4)); ?>"><?php echo (2001+$i).'-'.(2001+($i+4)); ?></option>
    <?php endfor; ?>
  </select></p>
  <p>DOB<select name="date" id="date" >
    <?php for ($i = 1; $i <=31; $i++) : ?>
        <option value="<?php echo $i;?>"><?php echo ($i); ?></option>
    <?php endfor; ?>
  </select>
  <select name="month" id="month">
    <?php for ($i = 1; $i <=12; $i++) : ?>
        <option value="<?php echo $i;?>"><?php echo ($i); ?></option>
    <?php endfor; ?>
	</select>
  <select name="yy" id="yy">
    <?php for ($i = 50; $i >=1; $i--) : ?>
        <option value="<?php echo (1970+$i); ?>"><?php echo (1970+$i); ?></option>
    <?php endfor; ?>
  </select>
  <p>CITY<input type="text" id="city" name="city" /></p>
  <p>MOBILE NO.<input type="text" id="mob" name="mob" required/></p>
  <p>EMAIL ID: <?php echo$_SESSION['Emailid'];?></p>
  <p>ADDRESS:<input type="text" id="address" name="address"/></p>
  <p>PRESENT STATUS:<select name="ps" id="ps">
     <option value="studying">STUDYING</option>
     <option value="working">WORKING</option>
  </select></p>
  	<p><input type="submit" id="btn1" value="SAVE"</p>
 </form>
 </div>
</div>
 
 <?php	 	
     mysqli_close($conn);		 
}
else
{
 echo"DETAILS ALREADY PRESENT YOU CAN UPDATE OR VIEW YOUR INFO";
 echo '<div>
 <form action="studentupdate.php" method="POST">
  <p><input type="submit" id="stupdate" value="UPDATE DETAILS"/></p>
  </form>
  <form action="studentview.php" method="POST">
  <p><input type="submit" id="stview" value="VIEW DETAILS"/></p>
  </form>
 </div>';
 mysqli_close($conn);
 return;
}
?>
</center>
 </body>
</html> 
