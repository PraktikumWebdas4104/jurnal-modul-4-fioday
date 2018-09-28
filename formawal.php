<html>
<head>
	<title></title>
</head>
<body>
	<h2>Login Disini</h2>
 <form action="login.php" method="post">
 	username: <input type="text" name="username">

 	password: <input type="password" name="password">

 	<input type="submit" value="masuk">
 </form>
</body>
</html>

<?php
session_start();

$username=$_POST["username"];
$password=$_POST["password"];

if ($username == "dayana" and $password=="dayana") {

	$_SESSION["username"]=$username;
	header("location: proses.php");
}else{
	echo ("tidak login");
}

?>
