<html>
<body>
<center>
<form action="logout.php">                                <!--logout button-->
    <button>LOG OUT</button>
 </form>
 <form action="admin.php">                                <!--back button-->
    <button><-</button>
 </form>

 
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

 session_start(); 
 $conn=mysqli_connect("localhost","root","21122012s","login");
 if(!$conn)
 {
 die("connection failed: ".mysql_connect_error());
 } 
  $result = $conn->query("SELECT* FROM alumni");
  
	 if ($result->num_rows > 0) {
		 echo '<table border=1px)';
    while($row = $result->fetch_assoc()) {
		echo '<tr>'
		echo '<td>'.$row['id'].'</td><td>'. $row["Fname"].'</td><td>'. $row["Lname"].'</td>';
       
		echo '</tr>';
	
		echo '<form action="viewby.php" method="POST">
         <input type="submit" id="viewby" value="view"/>
         </form>
          <form action="updateby.php" method="POST">
         <input type="submit" id="updateby" value="update"/>
          </form>';
		 }	
		 echo '</table>';
		 mysqli_close($conn);
	}
	else
	{
	echo "NO RECORDS PRESENT THE ALUMNI DATABASE IS EMPTY";
	mysqli_close($conn);
	}
	
	
  ?>
</center>



 </body>
 </html>