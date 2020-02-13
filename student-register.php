<?php
	require_once('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Student Register</title>
  </head>
  <body>
  <!--- <div class="alert alert-warning logauth">The password you entered was not valid. / No account found with that username.</div> --->
  <!--- <div class="alert alert-success logauth">Your account has been successfully verified.</div> --->
<div>
	<?php
  		if(isset($_POST['register'])){
  			function validateFormData( $formData ) {
  				$formData = trim( stripslashes( htmlspecialchars($formData)));
			return $formData;
  			}
	  		if( !$_POST["username"] ) {
	            $nameError = "Please enter your username <br>";
	        } else {
	            $username = validateFormData( $_POST["username"] );
	        }
	        if( !$_POST["email"] ) {
	            $emailError = "Please enter your email <br>";
	        } else {
	            $email = validateFormData( $_POST["email"] );
	        }
	        if( !$_POST["password"] ) {
	            $passwordError = "Please enter your password <br>";
	        } else {
	            $password = validateFormData( $_POST["password"] );
	            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	        }
	        if( !$_POST["password1"] ) {
	            $passwordError = "Please confirm your password <br>";
	        } else {
	            $password1 = validateFormData( $_POST["password1"] );
	            $password1 = password_hash($_POST['password1'], PASSWORD_DEFAULT);
	        }

	        $query = "INSERT INTO user (username, email, password) VALUES ('$username','$email','$password')";

	        if( mysqli_query($db, $query)){
	                    echo "<script src='https://code.jquery.com/jquery-3.4.1.min.js' integrity='sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=' crossorigin='anonymous'></script>
						<script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
						<script type='text/javascript'>
							$(function(){
								$('#register').click(function(){

									Swal.fire({
										  position: 'center',
										  icon: 'success',
										  title: 'Successfully Registered!',
										  showConfirmButton: false,
										  timer: 2500
										})
								});
							});

						</script>". "<br>";             
	        }else{
	                    echo "Error: ".$query. "<br>". mysqli_error($db);
	        }

  		}

  	?>
</div>
  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-26">
						Register
					</span><br><br>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" id="username" name="username" placeholder="Username" required>
					</div>

          <div class="wrap-input100 validate-input">
						<input class="input100" type="email" id="email" name="email" placeholder="Email" required>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" id="password" name="password" placeholder="Password" required>
					</div>

          <div class="wrap-input100 validate-input">
						<input class="input100" type="password" id="password1" name="password1" placeholder="Confirm Password" required>
					</div>

					<button class="login100-form-btn" id="register" name="register" type="submit">Register</button>

					<div class="text-center newreg">
						<a href="">Login</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
