<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css/header_footer.css" type="text/css">
<link rel="stylesheet" href="../css/reserve.css" type="text/css">
<script src="../js/reserve.js"></script>

<body>
    <div style="margin-top: 200px; margin-bottom: 160px;"></div>
    </div>

    <h1 class="h1">Book Reservation</h1>
        <?php
            require 'logindetails.php';
            require 'config.php';
            $reserve =$_GET['reserve'];

            $sql = "SELECT * FROM Books WHERE Title LIKE '%".$reserve."%' ";
            $result = $conn->query($sql);

            if ($result->num_rows>0)
            {
                echo "<table>";
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";

                    echo "<td width='15%'>";
                    echo '<img class="img1" src="data:image/jpeg;base64,'.base64_encode($row['cover_img'] ).'"/>';
                    echo "</td>";

                    echo "<td width='45%'>";
                    echo "<h2>".$row["Title"]."</h2> Author: ".$row["Author"]."<br><br> ISBN: ".$row["ISBN"]."<br><br>Available as: ".$row["Category"]."<br><br>Medium: ".$row["Medium"]."<br> <br>Rating: ".$row["Rating"]."/5<br><br>".$row["Description"]."<br><br><br><br>";


                    echo "<button class='confirm' onclick='confirm()'> Confirm Reservation </button>";
                    echo "<button class='cancel' onclick='cancel()'> Cancel Reservation </button>";
                    echo "</td>";

                    echo "</tr>";
                }
                echo "</table>";
            }

            else
            {
                echo "No result found";
            }

            $conn->close();

        ?>  
        

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

</html>