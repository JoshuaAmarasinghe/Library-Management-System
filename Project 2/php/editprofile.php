<!DOCTYPE html>
<html>
  <head>
    <title>Raven Library</title>
    <link rel="stylesheet" href="../css/editprofile.css">
    <link rel="stylesheet" href="../css/header_footer.css">
    <script src= "../js/useraccount.js">
    </script>
  </head>
  <body> 

  <div style="margin-top: 200px; margin-bottom: 125px; ">
    <h1 align="left" class="h1">Edit Profile</h1><br><br>

    
    <?php
        require 'config.php';

        $sql = "SELECT * FROM member WHERE name LIKE '%".$_GET['editprofile']."%'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    ?>

        <div class="details">
          <form method="post" action="">

            <br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="<?php echo $row["email"];?>" size="50"><br><br>

            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" placeholder="<?php echo $row["address"];?>" size="50"><br><br>

            <label for="mobile">Mobile number:</label><br>
            <input type="tel" id="mobile" name="mobile" placeholder="<?php echo $row["mobile"];?>" size="50"><br><br>

            <input type="submit" value="Submit" name="Submit">
          </form> 
        </div>

        <?php
        if (isset($_POST['Submit'])) 
        {
            $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $address = mysqli_real_escape_string($conn, $_POST['address']);

            $query = "UPDATE member SET mobile='$mobile', email='$email', address='$address' WHERE name LIKE '%".$_GET['editprofile']."%'";
            mysqli_query($conn, $query);
            header('location: UserAccount.php');
          }
          $conn->close();
      ?> 
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