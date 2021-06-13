<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Library</title>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="../css/header_footer.css">
        <link rel="stylesheet" href="../css/delete.css">
		<script src="../js/logout.js"></script>

	</head>

	<body>

		<div style="margin-top: 200px; margin-bottom: 170px; ">
			<h1 align="left" class="h1">Delete Books</h1>

            <br><br><br>

            <?php
                require 'config.php';

                $sql = "SELECT Title,Author,ISBN FROM Books ORDER BY ISBN";
                $result = $conn->query($sql);

                if ($result->num_rows>0)
                {
                    echo "<table>";
                    echo "<tr><td><h4>Books currently available in the Library<h3></td></tr>";
                    while($row = $result->fetch_assoc())
                    {
                        echo "<tr>";

                        echo "<td>".$row["Title"]."</td><td> By: ".$row["Author"]."</td><td> ISBN: ".$row["ISBN"]."</td>";

                        echo "</tr>";
                    }
                    echo "</table>";
                }
                else
                {
                    echo "No results Found";
                }
            ?>

            <form action="" method="GET">
				<br>
                <label for="isbn">Enter the ISBN of the book you want to delete<label><br>
				<input type="textbox" id="isbn" name="isbn">
				<br><br>

				<input type="submit" name="submit" value="Delete" id="subbtn">
			</form>
			
			<?php
				if(isset($_GET['submit']))
				{
					$isbn = $_GET['isbn'];

					$sql = "DELETE FROM Books WHERE ISBN = $isbn";

					if ($conn->query($sql) === TRUE) 
                    {
                        echo '<script language="javascript">';
                        echo 'alert("Book deleted Successfully")';
						echo '</script>';
						
						echo '<script language="javascript">';
                        echo 'window.location.href = "../php/deletebook.php"';
                        echo '</script>';
                    } 
                    else 
                    {
						echo '<script language="javascript">';
                        echo 'alert("Wrong ISBN")';
                        echo '</script>';
                        
                        echo '<script language="javascript">';
                        echo 'window.location.href = "../php/deletebook.php"';
                        echo '</script>';
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
						<img src="../images/Logo.png " class="profilepic " alt="Logo Image ">
					</a>
				</div>

				<button onclick="logout()" class="logout">Logout</button>

			</header>

			<br>

			<div class = "nav">
                    <ul>
                        <li><a href="../php/adminhome.php">Home</a></li>
                    </ul>
            </div>

		</div>
		<footer class=" footer-distributed ">

			<div class=" footer-left ">
				<h3>About<span>Raven</span></h3>
		
				<p class=" footer-company-name "> &copy; 2020 Raven Library </p>
			</div>
		
			<div class=" footer-center ">
				<div>
					<i class=" marker "></i>
					<p><span>Raven Industries HQ
							Prestige Ave,</span>
						Malabe.</p>
				</div>
		
				<div>
					<i class=" phone "></i>
					<p>+94 11 754 3181</p>
				</div>
		
				<div>
					<i class=" mail "></i>
					<p><a href=" # ">support@ravenlibrary.com</a></p>
				</div>
			</div>
		
			<div class=" footer-right ">
				<p class=" footer-company-about ">

					High end Library maintained and founded by Raven Industries Limited </p>
		
				<br> <br>
		
				<div>
					<a href=" https://www.facebook.com/ " target=" _blank "><img src=" ../images/ig.png " width=" 30 " height=" 30 "
							alt=" "></a> &nbsp&nbsp&nbsp
					<a href=" https://www.twitter.com/ " target=" _blank "><img src=" ../images/fb.png " width=" 30 " height=" 30 "
							alt=" "></a> &nbsp&nbsp&nbsp
					<a href=" https://www.instagram.com/ " target=" _blank "><img src=" ../images/tweet.png " width=" 30 " height=" 30 "
							alt=" "></a> &nbsp&nbsp&nbsp
				</div>
		
			</div>
		
		</footer>
	</body>

</html>