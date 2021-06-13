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
			<h1 align="left" class="h1">Add new Books</h1>

            <br><br><br>

            <form action="" method="POST" enctype="multipart/form-data">
				<br>
                <label for="title">Title:<label><br>
                <input type="textbox" id="title" name="title" placeholder="Enter the title of the book" required><br><br>

                <label for="author">Author:<label><br>
                <input type="textbox" id="author" name="author" placeholder="Enter the Author of the book" required><br><br>

                <label for="category">Category:<label><br>
                <input type="textbox" id="category" name="category" placeholder="DVD/CD/e-book/Book" required><br><br>

                <label for="medium">Medium:<label><br>
                <input type="textbox" id="medium" name="medium" placeholder="Enter the medium of the book" required><br><br>
                
                <label for="rating">Rating:<label><br>
                <input type="textbox" id="rating" name="rating" placeholder="Enter the rating for the book" required><br><br>

                <label for="copies">No.of Copies:<label><br>
                <input type="textbox" id="copies" name="copies" placeholder="Enter the no.of copies of the book" required><br><br>

                <label for="description">Description:<label><br>
                <textarea id="description" rows="8" name="description" placeholder="Enter a description for the book" required></textarea><br><br>

                <label for="image">Cover Image:<label><br>
                <input type="file" id="image" name="image" required><br><br>


				<br><br>

				<input type="submit" name="submit" value="Add" id="subbtn">
			</form>
			
            <?php

				require 'config.php';
                if(isset($_POST['submit']))
                {
                    $title = $_POST['title'];
                    $author = $_POST['author'];
                    $category = $_POST['category'];
                    $medium = $_POST['medium'];
                    $rating = $_POST['rating'];
                    $copies = $_POST['copies'];
                    $description = $_POST['description'];
                    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    
                    $sql = "INSERT INTO Books (Title, Author, Category, cover_img, Medium,Rating, Copies, Description) VALUES ('$title', '$author', '$category', '$file', '$medium', $rating, $copies, '$description')";
    
                    if ($conn->query($sql) === TRUE) 
                    {
                        echo '<script language="javascript">';
                        echo 'alert("Book Added Successfully")';
                        echo '</script>';

                        echo '<script language="javascript">';
                        echo 'window.location.href = "../php/addnewbook.php"';
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