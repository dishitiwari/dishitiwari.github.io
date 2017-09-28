<?php 
 session_start();
 $conn=mysqli_connect("localhost","root","","login");                //connecting to database named login
 if(!$conn)                                                                   //to check the connection
 {
 die("connection failed: ".mysql_connect_error());
 } 
 $to=$_POST['searchemail'];
 $sql="SELECT* FROM users WHERE Email='$to'";
 $result = $conn->query($sql);
if(!$row=$result->fetch_assoc())
{
 echo"email doesn't exist in database";
 return;
}
else
{
   $pwd=$row["pwd"];
   echo $to."<br>";
   $subject = "Your Recovered Password";

$message = "Please use this password to login ".$pwd;
$headers = "From : alumnibmsit@gmail.com";
    echo $message."<br>";
	echo $headers."<br>";
	mail($to, $subject, $message);
if(mail($to, $subject, $message)){
	echo "Your Password has been sent to your email id";
}else{
	echo "Failed to Recover your password, try again";
}
}
 mysqli_close($conn);
 
 
 ?>