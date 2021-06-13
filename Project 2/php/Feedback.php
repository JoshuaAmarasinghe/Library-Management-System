<!DOCTYPE html>
<html>
    <head>
        <title> Feedback Form </title>
        <meta name= "viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
        <link rel="stylesheet"  type= "text/css" href="../css/header_footer.css">
        <link rel="stylesheet" type="text/css" href="../css/feedback.css">
        <script type="text/javascript" src="../js/logout.js"></script>
    </head>
    <body>
        <div style="margin-top: 200px; margin-bottom: 125px; ">
            <h1 align="left" class="h1">Feedback Form</h1>   
     
            <form action="" method="GET">

                <br>
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Enter the first name and last name" required><br><br>
    
                <label for="phone">Mobile number:</label><br>
                <input type="tel" id="phone" name="phone" placeholder="Enter the telephone number" pattern="[0-9]{10}" required><br><br>
    
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="Enter your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br><br>
    
                <label for="feedback">Feedback:</label><br>
                <textarea id="feedback" name="feedback" rows="6" placeholder="Enter your Feedback here" required></textarea><br><br>
    
                <br><br>
    
                <input type="submit" name="submit" value="Submit" id="subbtn">
    
           </form>

           <?php
                require 'config.php';
                if(isset($_GET['submit']))
                {
                    $name = $_GET['name'];
                    $phone = $_GET['phone'];
                    $email = $_GET['email'];
                    $feedback= $_GET['feedback'];
    
                    $sql = "INSERT INTO feedback (name, mobile, email, feedback) VALUES ('$feedback', $phone, '$email', '$feedback')";
    
                    if ($conn->query($sql) === TRUE) 
                    {
                        echo '<script language="javascript">';
                        echo 'alert("Feedback Submitted Successfully")';
                        echo '</script>';

                        echo '<script language="javascript">';
                        echo 'window.location.href = "../php/Feedback.php"';
                        echo '</script>';
                    } 
                    else 
                    {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
    
                    $conn->close();  
                }          
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