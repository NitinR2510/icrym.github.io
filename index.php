<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
 
Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.
<br><br>
To continue to the main room, <a href="bot.htm">Click Here</a><br><br>
<br>
<br>
<br><br>
<em>“Understanding is the first step to acceptance, and only with acceptance can there be recovery.”
― J.K. Rowling, Harry Potter and the Goblet of Fire</em>