<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Library</title>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="../css/header_footer.css">
        <link rel="stylesheet" href="../css/add.css">
		<script src="../js/logout.js"></script>

	</head>

	<body>

        <div style="margin-top: 200px; margin-bottom: 100px; ">
			<h1 align="left" class="h1">Add News</h1>

            <br><br>

            <form action="" method="POST" enctype="multipart/form-data">
				<br>
				<label for="heading">Heading:<label><br>
                <input type="textbox" id="heading" name="heading" placeholder="Heading of the News" required><br><br>

                <label for="content">Content to be displayed in the Hompage:<label><br>
                <input type="textbox" id="content" name="content" placeholder="News content" required><br><br>

                <label for="newsbody1">News section 1:<label><br>
                <input type="textbox" id="news_body" name="news_body" placeholder="section 1" required><br><br>

                <label for="contentbody2">News section 2:<label><br>
                <input type="textbox" id="news_body2" name="news_body2" placeholder="section 1" required><br><br>
                
                <label for="image">News thumbnail:<label><br>
                <input type="file" id="image" name="image" required><br><br>

				<br><br>

				<input type="submit" name="submit" value="Add" id="subbtn">
			</form>
			
            <?php

				require 'config.php';
                if(isset($_POST['submit']))
                {
                    $heading = $_POST['heading'];
                    $content = $_POST['content'];
                    $news_body = $_POST['news_body'];
                    $news_body2 = $_POST['news_body2'];
                    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    
                    $sql = "INSERT INTO news (heading, content, news_body, news_body2, image) VALUES ('$heading', '$content', '$news_body', '$news_body2', '$file')";
    
                    if ($conn->query($sql) === TRUE) 
                    {
                        echo '<script language="javascript">';
                        echo 'alert("News Added Successfully")';
                        echo '</script>';

                        echo '<script language="javascript">';
                        echo 'window.location.href = "../php/addnews.php"';
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