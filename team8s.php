<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> TEAM8S HOME SITE </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1> TEAM8S HOME SITE </h1>

<div id="login">


<h3> <i> 
 
<hr>
<br> * Race results </br>
<br> * Qualifying </br>
<br> * loop Data Stats </br>
<br> * Forum </br>
<br> * And MORE !! </br>

<hr> 
</i> </h3>


<br>TEAM8S Login!! </br>
<?echo ?> <br><br><br/>
<form action="" method="post">
<label> <i> UserName : </i> </label>
<input id="name" name="username" placeholder="username" type="text">
<?echo ?> <br><br><br/>
<label> <i> Password : <i> </label>
<input id="password" name="password" placeholder="**********" type="password">
<?echo ?> <br><br/>
<input name="submit" type="submit" value=" Login ">
<?echo ?> <br/>	
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>
