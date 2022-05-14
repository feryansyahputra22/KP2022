<?php
include_once('header.php');
include_once('link.php');

?>

<div id="frmRegistration">
<form class="form-horizontal" method="POST" action="login_code.php">
	<h1>Halaman Login</h1>

  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-5">
      <input type="username" class="form-control" name="username" id="username" placeholder="Masukkan username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-5"> 
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Masukkan password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-3 col-sm-5">
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
  <small class="col-sm-offset-4 col-sm-5">Not Registered? <a href="Registration.php">Register Now</a></small>
</div>