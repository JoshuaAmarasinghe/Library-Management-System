<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Library</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/login.css">
		<link rel="stylesheet" href="../css/header_footer.css">
		<script src="../js/login.js"></script>

	</head>

	<body>

		<div style="margin-top: 140px; margin-bottom: 125px; ">
			<h1 align="left" class="h1">Login</h1>

			<br><br>
			<div class="slider" id="main-slider">
				<!-- outermost container element -->
				<div class="slider-wrapper">
					<!-- innermost wrapper element -->
					<img src="../images/read1.jpg" " alt=" First " class=" slide " /> <!-- slides -->
					<img src=" ../images/read2.jpg " alt=" Second " class=" slide " />
					<img src=" ../images/read3.jpg " alt=" Third " class=" slide " />
				</div>
			</div>
	
	
			<div class="form">
	
				<form action="" method="POST">
					<div class="imgcontainer">
						<br>
						<img src=" ../images/profile.png " height=" 120 " width=" 120 " alt=" Avatar " class=" avatar ">
					</div>
	
					<div class=" container " style=" display: flex; flex-direction: column; ">
	
						<label for="username">Username</label>
						<input type="text" placeholder=" Enter Username " name="username" required>
						<br>
						<label for="password">Password</label>
						<input type="password" placeholder=" Enter Password " name="password" required>
	
						<meta name=" viewport " content=" width=device-width, initial-scale=1 ">
	
						<br>
						<button class="button1" name="submit" type="submit">Login</button>
						<br>
					</div>	
				</form>
				<br>
				<a class="signup" href="../php/registration.php">Create an account</a>
				<a class="signup" href="../php/adminlogin.php">Login as an Admin</a>
			</div>

			<?php
				require 'config.php';

				if(isset($_POST['submit']))
				{
					$username = $_POST['username'];
					$password = $_POST['password'];

					$sql = "SELECT name,password FROM member WHERE name LIKE '%".$username."%' AND password LIKE '%".$password."%'";
					$result = $conn->query($sql);

					if ($result->num_rows>0)
					{
						session_start();
						$_SESSION['varname'] = $username;
						header('location: home.php');
					}
					else
					{
                        echo '<script language="javascript">';
                        echo 'alert("Incorrect Username or Password")';
                        echo '</script>';

                        echo '<script language="javascript">';
                        echo 'window.location.href = "../php/login.php"';
                        echo '</script>';
					}

					$conn->close();
				}
			?>
		</div>




		<div class="pageheader">
			<header>
				<div>
					<a href="#">
						<img src="../images/Logo.png " class="logo " alt="Logo Image ">
					</a>
				</div>

				<h1 class="headtitle ">Raven Library</h1>

				<div style="position: absolute; top: 1px; right: 20px;">
					<a href="#">
						<img src="../images/Logo.png " class="logo " alt="Logo Image ">
					</a>
				</div>

			</header>

			<br>

		</div>
		<footer class=" footer-distributed ">

			<div class=" footer-left ">
				<h3>About<span>Raven</span></h3>
		
				<p class=" footer-company-name "> &copy; 2020 Raven Library </p>
			</div>
		
			<div class=" footer-center ">
				<div>
					<i class=" marker "></i>
					<p><span>Raven Industries HQ
							Prestige Ave,</span>
						Malabe.</p>
				</div>
		
				<div>
					<i class=" phone "></i>
					<p>+94 11 754 3181</p>
				</div>
		
				<div>
					<i class=" mail "></i>
					<p><a href=" # ">support@ravenlibrary.com</a></p>
				</div>
			</div>
		
			<div class=" footer-right ">
				<p class=" footer-company-about ">

					High end Library maintained and founded by Raven Industries Limited </p>
		
				<br> <br>
		
				<div>
					<a href=" https://www.facebook.com/ " target=" _blank "><img src=" ../images/ig.png " width=" 30 " height=" 30 "
							alt=" "></a> &nbsp&nbsp&nbsp
					<a href=" https://www.twitter.com/ " target=" _blank "><img src=" ../images/fb.png " width=" 30 " height=" 30 "
							alt=" "></a> &nbsp&nbsp&nbsp
					<a href=" https://www.instagram.com/ " target=" _blank "><img src=" ../images/tweet.png " width=" 30 " height=" 30 "
							alt=" "></a> &nbsp&nbsp&nbsp
				</div>
		
			</div>
		
		</footer>
	</body>

</html>