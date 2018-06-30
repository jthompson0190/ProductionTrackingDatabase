<!DOCTYPE html>
<html>
<head>
  <title>Converting Production Database Register</title>
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
            <img src="img/logo.jpg"
                
		</div>
		
		<form class="col-12" action="includes/signup.inc.php" method="POST" autocomplete="off" >
			<div class="form-group">
				<input type="text" class="form-control" name="first" placeholder="First Name">
            </div>
            <div class="form-group">
				<input type="text" class="form-control" name="last" placeholder="Last Name">
            </div>
            <div class="form-group">
				<input type="text" class="form-control" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
				<input type="text" class="form-control" name="uid" autocomplete="nope" placeholder="Enter Username">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="pwd" autocomplete="new-password" placeholder="Enter Password">
			</div>
			<button type="submit" name="register" class="btn" href="index.php"><i class="fas fa-sign-in-alt"></i> Register </button>
		</form>

		<div class="col-12 forgot">
			<a href="index.php">Return to login</a>
		</div>

      </div>  <!-- End of Modal Content -->
    </div>
  </div>

  

</body>
</html>