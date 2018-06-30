<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Converting Production Database Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="modal-dialog text-center">
    <div class="col-sm-11 main-section">
      <div class="modal-content">
        <div class="col-12 user-img">
          	<img src="img/logo.jpg">
		</div>
		
		<form class="col-21" action="includes/login.inc.php" method="POST" >
			<div class="form-group">
				<input type="text" class="form-control" name="uid" placeholder="Enter Username">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="pwd" placeholder="Enter Password">
			</div>
			<button type="submit" name="login" class="btn" href="home.php"><i class="fas fa-sign-in-alt" ></i> Login </button>
		</form>

		<div class="col-12 forgot">
			<a href="RegisterPage.php">Register</a>
		</div>

      </div>  <!-- End of Modal Content -->
    </div>
  </div>

  

</body>
</html>


