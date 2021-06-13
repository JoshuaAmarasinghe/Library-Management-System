<!DOCTYPE html>
<html>
    <head>
        <title>Search</title>
        <link rel="stylesheet" href="../css/header_footer.css">
        <link rel="stylesheet" href="../css/searchpage.css">
        <script type="text/javascript" src="../js/logout.js"></script>
    </head>

    <body>

        <div style="margin-top: 200px; margin-bottom: 125px; ">

            <h1 align="left" class="h1">Search</h1>

            <form action="../php/searchresults.php" method="GET">
                <select name="Type" id="type1" class="sel1">
                    <option value="Title">Title</option>
                    <option value="Author">Author</option>
                    <option value="ISBN">ISBN</option>
                </select>
            
                <input type="text" id="searchbox" name="Searchbox1" placeholder="Search Text" class="search" required>
    
                <br><br>
    
                <label for="Category1" class="lab1">Category:</label>
                <select name="Category" id="Category1" class="sel2">
                    <option value="All">All</option>
                    <option value="Book">Book</option>
                    <option value="e-book">e-Book</option>
                    <option value="CD/DVD">CD/DVD</option>
                </select>
    
                <label for="Library1" class="lab2">Library:</label>
                <select name="Library" id="Library1" class="sel2">
                    <option value="Malabe">Malabe</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Jaffna">Jaffna</option>
                </select>
    
                <br><br><br>

                <input type="submit" class="searchbtn" id="sbtn" value="Search">

            </form>

            <div class="guidelines">
                <b>Guidelines</b>
                <p>
                    To view the guidelines for borrowing and reserving books
                    <a href="../php/guideline.php">click here.</a>
                </p>
            </div>

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