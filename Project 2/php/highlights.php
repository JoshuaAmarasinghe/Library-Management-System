<!DOCTYPE html>
<html>
<?php require 'logindetails.php';?>	
	<head>
		<title>Library</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/header_footer.css" type="text/css">
		<script src="../js/logout.js"></script>
	</head>
	<body style="font-family:helvetica;">

			
		<br><br></br></br></br></br></br></br></br>
		<h1><center> Hightlights </center></h1>
		
		<article>
					<?php
					 require 'config.php';
						$sql= "SELECT 	content_body, content_body2 , image, heading FROM highlight
								WHERE highlight_id = 1";
						$result = $conn->query($sql);

						if($result->num_rows > 0){
							// output data of each row
							while($row = $result->fetch_assoc()){
								echo "<b><h1>" . $row["heading"] . "</h1></b>";	
								echo "<br> <br>";						
								echo '<img class="" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>' ;
								echo "<br><br><br>";
								echo "" . $row["content_body"] . "";
								echo "<br> <br>";
								echo "" . $row["content_body2"] . "";
								echo "<br><br><br>";
							}
						}
						else 
						{
							echo "no result";
						};
					$conn->close()
					?>		 
				</article>
				<article>
					<?php
					 require 'config.php';
						$sql= "SELECT 	content_body, content_body2 , image, heading FROM highlight
								WHERE highlight_id = 2";
						$result = $conn->query($sql);

						if($result->num_rows > 0){
							// output data of each row
							while($row = $result->fetch_assoc()){
								echo "<b><h1>" . $row["heading"] . "</h1></b>";	
								echo "<br> <br>";						
								echo '<img class="" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>' ;
								echo "<br><br><br>";
								echo "" . $row["content_body"] . "";
								echo "<br> <br>";
								echo "" . $row["content_body2"] . "";
								echo "<br><br><br>";
							}
						}
						else 
						{
							echo "";
						};
					$conn->close()
					?>		 
				</article>
				<article>
					<?php
					 require 'config.php';
						$sql= "SELECT 	content_body, content_body2 , image, heading FROM highlight
								WHERE highlight_id = 3";
						$result = $conn->query($sql);

						if($result->num_rows > 0){
							// output data of each row
							while($row = $result->fetch_assoc()){
								echo "<b><h1>" . $row["heading"] . "</h1></b>";	
								echo "<br> <br>";						
								echo '<img class="" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>' ;
								echo "<br><br><br>";
								echo "" . $row["content_body"] . "";
								echo "<br> <br>";
								echo "" . $row["content_body2"] . "";
								echo "<br><br><br>";
							}
						}
						else 
						{
							echo "";
						};
					$conn->close()
					?>		 
				</article>				
		<!-- header -->
        <div class="pageheader">
                <header>
                    <div>
                        <a href="../php/home.php">
                            <img src="../images/Logo.png" class="logo" alt="Logo Image">
                        </a>
                    </div>

                    <h1 class="headtitle">Raven Library</h1>

                    <div class="profile">
                        <a href="../php/UserAccount.php">
                            <?php 
                                require 'logindetails.php';
                                echo '<img class="profilepic" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>';
                            ?>
                        </a>
                    </div>

                    <button onclick="logout()" class="logout">Logout</button>
                
                </header>

                <br>

                <div class = "nav">
                    <ul>
                        <li><a href="../php/home.php">Home</a></li>
                        <li><a href="../php/Search.php">Search</a></li>
                        <li><a href="../php/NewArrivals.php">New Arrivals</a></li>
                        <li><a href="../php/ContactUs.php">Contact Us</a></li>
                        <li><a href="../php/guideline.php">General Guidelines</a><li>
                    </ul>
                </div>
        </div>
		</div>
		<!-- Site footer -->
		<footer class="footer-distributed">

			<div class="footer-left">
				<h3>About<span>Raven</span></h3>

				<p class="footer-links">
					<a href="../php/home.php">Home</a>
					|
					<a href="../php/ContactUs.php">Contact</a>
				</p>

				<p class="footer-company-name"> &copy; 2020 Raven Library </p>
			</div>

			<div class="footer-center">
				<div>
					<i class="marker"></i>
					<p><span>Raven Industries HQ
						Prestige Ave,</span>
						Malabe.</p>
				</div>

				<div>
					<i class="phone"></i>
					<p>+94 11 754 3181</p>
				</div>
				
				<div>
					<i class="mail"></i>
					<p><a href="#">support@ravenlibrary.com</a></p>
				</div>
			</div>

			<div class="footer-right">
				<p class="footer-company-about">
					
					<span><a style="text-decoration: none; color: white;" href="../php/Feedback.php">Feedback</a></span>
					High end Library maintained and founded by Raven Industries Limited </p>
					
					<br> <br>

				<div>
					<a href="https://www.facebook.com/" target="_blank"><img src="../images/fb.png" width="30" height="30" alt=""></a> &nbsp&nbsp&nbsp
					<a href="https://www.twitter.com/" target="_blank"><img src="../images/tweet.png" width="30" height="30" alt=""></a> &nbsp&nbsp&nbsp
					<a href="https://www.instagram.com/" target="_blank"><img src="../images/ig.png" width="30" height="30" alt=""></a> &nbsp&nbsp&nbsp
				</div>
				
			</div>

		</footer>
		<!-- footer -->   
		</div>
	</body>	
</html>