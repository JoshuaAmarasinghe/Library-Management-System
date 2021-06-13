<!DOCTYPE html>
<html>
    <head>
        <title>Search</title>
        <link rel="stylesheet" href="../css/header_footer.css">
        <link rel="stylesheet" href="../css/searchresult.css">
        <script type="text/javascript" src="../js/logout.js"></script>
    </head>

    <body>

        <div style="margin-top: 200px; margin-bottom: 50px;">

        <?php
            require 'logindetails.php';
            require 'config.php';
            
            $type = $_GET['Type'];
            $category = $_GET['Category'];
            $text = $_GET['Searchbox1'];

            if ($category != 'All')
            {
                $sql = "SELECT * FROM Books WHERE `$type` LIKE '%".$text."%' AND `Category` LIKE '%".$category."%'";
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
            
                        echo "<td width='45%'><h3>".$row["Title"]."</h3><br> Author: ".$row["Author"]."<br> ISBN: ".$row["ISBN"]."<br>Available as: ".$row["Category"]."</td>";
            
                        echo "<td> Medium: ".$row["Medium"]."<br> Rating: ".$row["Rating"]."/5</td>";
                        $name = $row["Title"];
            
                        echo "<td>";
                                
                        echo "<form action='../php/reserve.php' method='GET'>";
                        echo "<button type='submit' class='reserve' name='reserve' value='$name'>Reserve</button> ";
                        echo "</form>";

                        echo "</td>";

                        echo "</tr>";
                    }
                    echo "</table>";
                }
                else
                {
                    echo "No results found";
                }

            }
            else
            {
                $sql = "SELECT * FROM Books WHERE `$type` LIKE '%".$text."%'";
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
            
                        echo "<td width='45%'><h3>".$row["Title"]."</h3><br> Author: ".$row["Author"]."<br> ISBN: ".$row["ISBN"]."<br>Available as: ".$row["Category"]."</td>";
            
                        echo "<td> Medium: ".$row["Medium"]."<br> Rating: ".$row["Rating"]."/5</td>";

                        $name = $row["Title"];
            
                        echo "<td>";
                                
                        echo "<form action='../php/reserve.php' method='GET'>";
                        echo "<button type='submit' class='reserve' name='reserve' value='$name'>Reserve</button> ";
                        echo "</form>";

                        echo "</td>";

                        echo "</tr>";
                    }
                    echo "</table>";
                }
                else
                {
                    echo "No results found";
                }
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