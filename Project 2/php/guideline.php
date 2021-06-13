<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Library</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/header_footer.css">
		<link rel="stylesheet" href="../css/guideline.css">
		<script src="../js/guideline.js"></script>
	</head>
	<body>
		<div style="font-family:helvetica;">
			<br></br><br></br><br></br><br></br><br>
			<h1> General Guidelines</h1>
			<ul style="list-style-type:disc">
			<li><p> University Identity Card works as evidence either you are a student or staff in this university.</p><p> Do not hesitate to produce your valid University Identity card before entering the library.</p></li>
			
			<li><p> If you are not a student or staff member in this university, show your national Identity / Passport</p><p> and request the direction from the staff in front desk and visit the library office. permission has </p><p>to obtained from the Librarian or the authorized staff member in the library to access the collection.</p></li>
			
			<li><p>The University Identity Card facilitates to provide access to your profile in the library </p> management system. Hence, the University Identity Card is compulsory to borrow books from the library.</p></li>
			
			<li><p>Books of permanent reference, past papers and periodicals will only be issued for photocopy purposes withholding your</p><p> University Identity Card until returned the material to the section.</p></li>
			</ul>
			<div>
				<table border="0" align="center" width="95%">
					<tr>
						<td>
							<div class="topnav">
								<p onclick="loaddata('GR')">General Rules</p>
								<p onclick="loaddata('BR')">Borrowing Rules and Regulations</p>
								<p onclick="loaddata('BP')">Borrowing privileges</p>
								<p onclick="loaddata('EU')">External Users</p>
								<p onclick="loaddata('AE')">Accessing E-Library</p>
							</div>
							
							<div>
							<p id="p1"></p>
							</div>
						</td>
					</tr>
				</table>
			</div>
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
		</div>
	</body>
</html>