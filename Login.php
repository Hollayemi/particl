<?php
    include('auth.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section class="loginSec">
        <div class="loginBody">
            <div class="myLoginBoxes">
				<div class="myTopLoginBox">
					<div class="topDivTitle">
						<h2 style="text-align:center;line-height:50px">Auction </h2>
					</div>

					<div class="loingInput">
						<form action="" method="POST" autocomplete='off'>
							<input type="text" placeholder="Email" name="email" style="margin-top:200px;"><br><br>
							<input type="password" placeholder="Password" name="password"><br><br>
							<input type="submit" value="Login" name="Login" class="submitLogin">
						</form>
					</div>
					<div class="loingInput signupInput fir">
						<form action="" method="POST" autocomplete='off'>
							<input type="text" placeholder="Full Name" name="regUname" style="margin-top:220px;"><br><br>
							<input type="text" placeholder="Email" name="regUemail"><br><br>
							<input type="password" placeholder="Password" name="regUpass"><br><br>
							<input type="password" placeholder="Confirm Password" name="confRegUpass"><br><br>
							<!-- <input type="text" placeholder="First Name" name="Fname"><br><br> -->
                            <input type="submit" value="Sign Up" name="Register" class="submitLogin">
							
						</form>
					</div>


				</div>
				<div class="myBottomLoginBox">
					<div class="LoginSignUp">
						<div><h3 class="switchLogin">LOGIN</h3></div>
						<div><h3 class="switchSignUp">SIGN UP</h3></div>
					</div>
					<h4 class="ForgotPass"><a href="#">Forgot Password?</a></h4>

				</div>
				
			</div>
        </div>
    </section>

    <script src="login.js"></script>
</body>
</html>