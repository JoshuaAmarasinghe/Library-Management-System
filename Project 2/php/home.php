<!DOCTYPE html>
<html>
	<?php require 'logindetails.php';?>
	<head>
		<title>Library</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/header_footer.css">
		<link rel="stylesheet" href="../css/homepage_layout.css" type="text/css">
		<script src="../js/homepage.js"></script>
	</head>
	<body>

		<br></br><br></br><br></br><br></br>
		<!-- content -->
		<div style="font-family:helvetica;">
		<div class="slider" id="main-slider">
			<div class="slider-wrapper">
				<img src="../images/Library-Background.jpg" alt="First" class="slide" /> <!-- slides -->
				<img src="../images/Library-Background2.jpg" alt="Second" class="slide" />
				<img src="../images/Library-Background3.jpg" alt="Third" class="slide" />
			</div>
		</div>	

			<br>
			<section id="mission">
			<h2> Our Mission </h2>
				<p>	The Mission is to provide access to the library and information services in an efficient, effective and useful manner to support teaching, 
					learning and research activities of the intellectual community by making resource materials available, 
					and by assisting users to be acquainted with skills in locating information deemed necessary in the modern information age.</p>
			<h2> Our Vision </h2>
				<p> Vision
				The University Libraries are engaged in learning and discovery as essential participants in the educational community. We develop, organize, 
				provide access to and preserve materials to meet the needs of present and future generations of students and scholars. We explore 
				and implement innovative technologies and services to deliver information and scholarly resources conveniently to users anytime/anyplace. 
				We also provide well-equipped and functional physical spaces where students can pursue independent learning and discovery outside the classroom. 
				The University Libraries support scholarship and research productivity and foster their vitality.
			</section>
			<br> 
			<hr>
			<br>
			<div>
				<h2 style="text-align:center;"> Highlights </h2>
				
			<section id="" class="highlight">
				<article>
					<?php
					 require 'config.php';
						$sql= "SELECT content, image, heading FROM highlight
								WHERE highlight_id = 1";
						$result = $conn->query($sql);

						if($result->num_rows > 0){
							// output data of each row
							while($row = $result->fetch_assoc()){
								echo "<b>" . $row["heading"] . "</b>";	
								echo "<br> <br>";						
								echo '<img class="" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>' ;
								echo "<br>";
								echo "" . $row["content"] . "";
							}
						}
						else 
						{
							echo "";
						};
					$conn->close()
					?>	
				<br><br>	 
				<p><a class="more" href="../php/highlights.php"> Read More &raquo; </a></p>
				</article>
				
				<article>
					<?php
					require 'config.php';
						$sql= "SELECT content, image, heading FROM highlight
								WHERE highlight_id = 2";
						$result = $conn->query($sql);

						if($result->num_rows > 0){
							// output data of each row
							while($row = $result->fetch_assoc()){
								echo "<b>" . $row["heading"] . "</b>";	
								echo "<br> <br>";						
								echo '<img class="" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>' ;
								echo "<br>";
								echo "" . $row["content"] . "";
							}
						}
						else 
						{
							echo "";
						};
					$conn->close()
					?>
				</article>
				
				<article class="">
					<?php
					require 'config.php';
						$sql= "SELECT content, image, heading FROM highlight
								WHERE highlight_id = 3";
						$result = $conn->query($sql);

						if($result->num_rows > 0){
							// output data of each row
							while($row = $result->fetch_assoc()){
								echo "<b>" . $row["heading"] . "</b>";	
								echo "<br> <br>";						
								echo '<img class="" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>' ;
								echo "<br>";
								echo "" . $row["content"] . "";
							}
						}
						else 
						{
							echo "";
						};
					$conn->close()
					?>
				</article>
			</section>
			<hr>
		
			<div id="homepage">	
			<h2 style="text-align:center;"> Most Popular </h2>
			<section id="" class="popular">
				<article class="">
					<?php
					require 'config.php';
					
						$sql= "SELECT * FROM Books ORDER BY rating DESC LIMIT 0,1";
						$result = $conn->query($sql);

						if($result->num_rows > 0){
							// output data of each row
							while($row = $result->fetch_assoc()){

								$name = $row["Title"];
								echo '<a href="../php/reserve.php?reserve='.$name.'">';
								echo "<br>";
								echo '<img class="imgmp" src="data:image/jpeg;base64,'.base64_encode($row['cover_img'] ).'"/>';	
								echo "<br>";
								echo "<b>" . $row["Title"] . "</b>";							
								echo "<br>";
								echo '</a>'; 
							}
						}
						else 
						{
							echo "no result";
						};
					$conn->close()
					?>
				
				</article>
				<article class="">
					<?php
					require 'config.php';
					
						$sql= "SELECT * FROM Books ORDER BY rating DESC LIMIT 1,1";
						$result = $conn->query($sql);

						if($result->num_rows > 0){
							// output data of each row
							while($row = $result->fetch_assoc()){
								$name = $row["Title"];
								echo '<a href="../php/reserve.php?reserve='.$name.'">';
								echo "<br>";
								echo '<img class="imgmp" src="data:image/jpeg;base64,'.base64_encode($row['cover_img'] ).'"/>';	
								echo "<br>";
								echo "<b>" . $row["Title"] . "</b>";							
								echo "<br>";
								echo '</a>'; 
							}
						}
						else 
						{
							echo "no result";
						};
					$conn->close()
					?>
				</article>
				<article class="">
					<?php
					require 'config.php';
					
						$sql= "SELECT * FROM Books ORDER BY rating DESC LIMIT 2,1";
						$result = $conn->query($sql);

						if($result->num_rows > 0){
							// output data of each row
							while($row = $result->fetch_assoc()){
								$name = $row["Title"];
								echo '<a href="../php/reserve.php?reserve='.$name.'">';
								echo "<br>";
								echo '<img class="imgmp" src="data:image/jpeg;base64,'.base64_encode($row['cover_img'] ).'"/>';	
								echo "<br>";
								echo "<b>" . $row["Title"] . "</b>";							
								echo "<br>";
								echo '</a>'; 
							}
						}
						else 
						{
							echo "no result";
						};
					$conn->close()
					?>
				</article>
				<article class="">
					<?php
					require 'config.php';
					
						$sql= "SELECT * FROM Books ORDER BY rating DESC LIMIT 3,1";
						$result = $conn->query($sql);

						if($result->num_rows > 0){
							// output data of each row
							while($row = $result->fetch_assoc()){
								$name = $row["Title"];
								echo '<a href="../php/reserve.php?reserve='.$name.'">';
								echo "<br>";
								echo '<img class="imgmp" src="data:image/jpeg;base64,'.base64_encode($row['cover_img'] ).'"/>';	
								echo "<br>";
								echo "<b>" . $row["Title"] . "</b>";							
								echo "<br>";
								echo '</a>'; 
							}
						}
						else 
						{
							echo "no result";
						};
					$conn->close()
					?>
				</article>
			</section>
			</div>
			
			<div>
			<hr>
			<h2 style="text-align:center;"> News </h2>
			<section id="" class="news">
				<article>
					<?php
					require 'config.php';
					
						$sql="SELECT * FROM news ORDER BY news_id DESC LIMIT 0,1";
						$result = $conn->query($sql);

						if($result->num_rows > 0){
							// output data of each row
							while($row = $result->fetch_assoc()){
								echo "<br>";
								echo '<img class="" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>' ;	
								echo "<br>";
								echo "<b>" . $row["heading"] . "</b>";						
								echo "<br>";
								echo "" . $row["content"] . "";
							}
						}
						else 
						{
							echo "no result";
						};
					$conn->close()
					?>
				<br><br>
				<p><a class="more" href="../php/news.php">Read More &raquo;</a></p>
				</article>
					
				<article>
					<?php
					require 'config.php';
					
						$sql="SELECT * FROM news ORDER BY news_id DESC LIMIT 1,1";
						$result = $conn->query($sql);

						if($result->num_rows > 0){
							// output data of each row
							while($row = $result->fetch_assoc()){
								echo "<br>";
								echo '<img class="" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>' ;	
								echo "<br>";
								echo "<b>" . $row["heading"] . "</b>";						
								echo "<br>";
								echo "" . $row["content"] . "";
							}
						}
						else 
						{
							echo "no result";
						};
					$conn->close()
					?>
				</article>
				
				<article class="">
					<?php
					require 'config.php';
					
						$sql="SELECT * FROM news ORDER BY news_id DESC LIMIT 2,1";
						$result = $conn->query($sql);

						if($result->num_rows > 0){
							// output data of each row
							while($row = $result->fetch_assoc()){
								echo "<br>";
								echo '<img class="" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>' ;	
								echo "<br>";
								echo "<b>" . $row["heading"] . "</b>";						
								echo "<br>";
								echo "" . $row["content"] . "";
							}
						}
						else 
						{
							echo "no result";
						};
					$conn->close()
					?>
				</article>
			</section>
			</div>
			<hr>
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

	</body>
</html>