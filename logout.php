<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: team8s.php"); // Redirecting To Home Page
}
?>
