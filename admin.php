<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
 <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

<link href="/assets/css/style_login_registration.css" type="text/css" rel="stylesheet" />
<title>ADMIN</title>
<link rel="stylesheet" type="test/css" href="style.css">
</head>
<body>
<center>
<form action="logout.php" class="form" >
    <button>LOG OUT</button>
 </form>
 <br>
 <br>
 <br>
<div id="frm" class="form">
<form action="adminview.php" method="POST">
  <p><input type="submit" id="view" value="FULLDETAIL"/></p>
  </form>
<form action="viewby.php" method="POST">
  <p><input type="submit" id="viewby" value="viewby"/></p>
 </form>
<form action="updateby.php" method="POST">
  <p><input type="submit" id="updateby" value="updateby"/></p>
</form>  
 </div>
 </center>
 </body>
</html> 