<?php
include_once('link.php');
session_start();
$username = $_SESSION['username'];
?>

<nav class="navbar navbar-default">
		</div>
		<div class="dropdown navbar-right" id="right">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $username;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
	</div>
</nav>