
<!DOCTYPE html>
<html>
    <head>
        <title> Registration Form </title>
        <meta name= "viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
        <link rel="stylesheet"  type= "text/css" href="../css/header_footer.css">
        <link rel="stylesheet" type="text/css" href="../css/registration.css">
        <script type="text/javascript" src="../js/registration.js"></script>
    </head>
    <body>
        <div style="margin-top: 200px; margin-bottom: 125px; ">
            <h1 align="left" class="h1">Registration Form</h1>   
            
            <form action="" method="POST" enctype="multipart/form-data">

                <br>
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Enter the first name and last name" required><br><br>
    
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="Enter your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br><br>

                <label for="address">Address</label><br>
                <textarea id="address" name="address" rows="6" placeholder="Enter your address" required></textarea><br><br>

                <label for="phone">Mobile number:</label><br>
                <input type="tel" id="mobile" name="mobile" placeholder="Enter the telephone number" pattern="[0-9]{10}" required><br><br>
    
                <label for="birthday">Birthday:</label><br>
                <input type="text" id="dob" name="dob" placeholder="Enter the Birthday" required><br><br>
    
                <label for="pwd">Password:</label><br>
                <input type="password" id="pwd" name="password" pattern="[A-Za-z0-9]{5,}" placeholder="Enter the password" required>
    
                <div id="message" class="message">
                    <p>Password must contain lowercase letters, uppercase letters, numbers and should consist of minimum 5 characters</p>
                </div>

                <label for="image">Profile Picture:<label><br>
                <input type="file" id="image" name="image" required><br><br>
    
                <script>
                    var myInput = document.getElementById("pwd");
    
                    myInput.onfocus = function() 
                    {
                        document.getElementById("message").style.display = "block";
                    }
      
                    myInput.onblur = function() 
                    {
                        document.getElementById("message").style.display = "none";
                    }
                </script>
    
                <br><br>

                <input type="checkbox" name="checkbox" value="check" id="agree" onclick="enableButton()">I Accept privacy policy and terms.
    
                <br><br>
    
                <input type="submit" name="submit" value="Submit" id="subbtn">
    
                <script>
                    document.getElementById("subbtn").disabled = true;
                </script>
    
           </form>

            <?php
                require 'config.php';
                if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $mobile = $_POST['mobile'];
                    $dob = $_POST['dob'];
                    $password = $_POST['password'];
                    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

                    $sql = "INSERT INTO member (name, email, address, mobile, dob, image, password)
                    VALUES ('$name', '$email', '$address', $mobile, '$dob', '$file', '$password')";

                    if ($conn->query($sql) === TRUE) 
                    {
                        echo '<script language="javascript">';
                        echo 'alert("Registered Successfully")';
                        echo '</script>';

                        echo '<script language="javascript">';
                        echo 'window.location.href = "../php/login.php"';
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
            
            
        <footer class="footer-distributed">
                    <div class="footer-left">
                        <h3>About<span>Raven</span></h3>
                        <p class="footer-links">
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
                            High end Library maintained and founded by Raven Industries Limited </p>
                            <br> <br>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank"><img src="../images/ig.png" width="30" height="30" alt=""></a> &nbsp&nbsp&nbsp
                            <a href="https://www.twitter.com/" target="_blank"><img src="../images/fb.png" width="30" height="30" alt=""></a> &nbsp&nbsp&nbsp
                            <a href="https://www.instagram.com/" target="_blank"><img src="../images/tweet.png" width="30" height="30" alt=""></a> &nbsp&nbsp&nbsp
                        </div>
                    </div>
        </footer>
            
    </body>
</html>















