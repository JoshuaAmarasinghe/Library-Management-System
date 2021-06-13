<!DOCTYPE html>
<html>
  <head>
    <title>Raven Library</title>
    <link rel="stylesheet" href="../css/useraccount.css">
    <link rel="stylesheet" href="../css/header_footer.css">
    <script src= "../js/logout.js"></script>
  </head>
  <body> 
  
    <br><br><br><br><br><br><br><br><br><br>

    <h1 align="left" class="h1">User Account</h1><br><br>

    <div class="background">
        <br>
        <?php
          require 'logindetails.php'
        ?>

        <center>

          <table width="90%">
            <br>
            <tr>
              <td width="25%">
                <?php echo '<img class="user" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>';?>
              </td>
              <td width="75%">
                <div class="details">
                  <ul><?php echo $row["name"];?></ul>
                  <ul><?php echo $row["email"];?></ul>
                  <ul><?php echo $row["address"];?></ul>
                  <ul>0<?php echo $row["mobile"];?></ul>
                  <ul><?php echo $row["dob"];?></ul>
                </div>
              </td>
            </tr>
          </table>

          <br>

          <form action="../php/editprofile.php" method="GET">
            <button type="submit" class="editbtn" name="editprofile" value="<?php echo $row["name"];?>">Edit Profile</button>
          </form>
          <br>
        </center>
    </div>

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
                      <?php echo '<img class="profilepic" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>';?>
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
<html>