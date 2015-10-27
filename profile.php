<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>TEAM8S Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<?echo ?> <br><br><br/>
  <i> <b>
Hey!!
<?php echo$login_session; ?> </i></b> </b>
<b id="welcome">  Welcome to TEAM8S webSite!!

<?echo ?> <br><br><br/>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>
