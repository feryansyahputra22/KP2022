<?php
include_once('link.php');
include_once('header1.php');
require_once('koneksi.php');

$id = $_SESSION['id'];
$fname = $lname = $username = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$username = $row["Username"];
		$gender = $row["Gender"];
	}
}

?>

<h1 class="Text-center">Dashboard</h1>