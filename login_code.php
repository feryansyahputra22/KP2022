<?php

require_once('koneksi.php');
$username = $password = $pwd = '';

$username = $_POST['username'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM tbluser WHERE Username='$username' AND Password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$username = $row["Username"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['username'] = $username;
	}
	header("Location: welcome.php");
}
else
{
	header("Location: login.php");
}
?>