<!DOCTYPE html>
<html lang="en">
    <?php require 'logindetails.php'?>
	<head>
		<title>Library</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/header_footer.css" type="text/css">
		<script src="../js/logout.js"></script>
	</head>
	<body style="font-family:helvetica;">

				<br></br></br></br></br></br></br></br>
		<h1> News </h1>

		<p style="font-size:25px;"> Special Collections re-opens for researchers </p>

		<p> Our Research Centre has opened spaces for four researchers in the Brotherton room – alongside virtual consultations and no-charge photos on request. </p>

		<p> Special Collections is now open to researchers, with sessions running from 10am to 1pm and 2pm to 4pm, Monday to Thursday. Due to the limited capacity, we will prioritise researchers from the University of Leeds.  </p>

		<p> Book your space and request the items you wish to consult using our new online “visitor basket” while browsing our collections. </p>

		<p> The new online booking and request system allows you to choose materials as you search our collections and then book a preferred date to visit. We’ll then contact you to confirm your visit date. You can find guidance on using the new online booking system in our Plan a visit webpages. </p>

		<p> If you’re not able to visit in person, we are offering virtual consultations for researchers to quickly access materials. We’ll show the items live using Microsoft Teams for up to an hour per session. Contact us to arrange a consultation. </p>

		<p> You are also able to request mobile phone quality photos of material for individual research at no charge. We can photograph materials for up to an hour at a time. Contact us to request photos. If the material is too fragile or large to photograph safely, we will let you know so you can request high-quality images through our Digitisation Service. Charges will apply for digitisation. </p>

		<p style="font-size:25px;">  Phased reopening of Library buildings </p>

		<p> During the lockdown, the Library has been open online to help you study, research and prepare for the new academic year. We will continue to offer these online services. As restrictions begin to ease, we’re now beginning to reopen our buildings in phases – with the health and wellbeing of our visitors and staff our top priority. </p>

		<p> Study spaces at the Brotherton Library are available to book now, in addition to those at the Edward Boyle and Laidlaw Library. We will continue to increase the number of study spaces available across our buildings, open up additional buildings and extend our current opening hours, as part of a rolling programme through September. </p>

		<p> Please limit your bookings to two sessions per week.

		Booking closes for the following day at 2pm. After 2pm, please look for the next available day. We will release the following week’s study slots on Wednesdays.</p>

		<p> We will give you a desk number on arrival. Once inside the building, follow directional signage to find your seat. Study spaces are clearly numbered – you must stay at your allocated study space.. </p>

		<p> Please wear a facemask while entering and moving around inside the library - you can remove your mask while you study. Cleaning materials will be provided so that you can clean your study space at the start and end of your session. </p>

		<p style="font-size:25px;">  New to University and not sure what to expect? Get ahead with Flying Start. </p>

		<p> The study skills needed at University can be very different from school or college, but with knowledge comes confidence. </p>

		<p> Flying Start covers all the essentials, from how to get the most from lectures and tutorials, time management, tackling your first assignment and the how and why of referencing.</p>

		<p> Featuring videos and tips from Leeds students, Flying Start is a valuable source of practical advice on coping with the first year.

		Get ahead with Flying Start</p>

		<p> Let us know which sessions you want to attend by filling in the online form. We’ll send you details on how to join the sessions nearer to the time.</p>

		<p> Contact us to be kept up-to-date with the latest workshop information, including availability notifications and details of new sessions added to the schedule, you’ll also be entered into a prize draw with a £20 Love2Shop voucher to win. </p>

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
