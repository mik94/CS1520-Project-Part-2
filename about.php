<?php
	$server = "localhost";
	$user = "root";
	$pass = "password";
	$db = "Contacts";
	$mysql_connect = new mysqli($server, $user, $pass, $db);
	if ($mysql_connect->connect_error){
		die("Connection failed: " .$mysql_connect->connect_error);
	}
	//echo "Connected successfully";
	$id = 0;
	$name = $email = $subject = $message = "";
	$msg = "";
	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
			//echo 'OK.';
		}
		else {
			echo 'All fields are required.';
		}
		$query = "INSERT INTO messages VALUES (DEFAULT, '$name', '$email', '$subject', '$message')";
		if (mysqli_query($mysql_connect, $query)){
			$msg = "Thank you for your message!";
			//echo "New record created successfully";
		}
		else {
			echo "Error: " . $query . "<br>" . mysqli_error($mysql_connect);
		}
	}
	mysqli_close($mysql_connect);

	$self = $_SERVER['PHP_SELF'];
	ob_start();
	include 'header.php';
	$buffer = ob_get_contents();
	ob_end_clean();
	$buffer = str_replace("%TITLE%", "About Us", $buffer);
	echo $buffer;
	echo generateNav($self) . "</div></div>";
?>
	<div class="content">
		<h2 style="line-height: 1.1em; font: normal normal normal 46px/1.4em 'jockey one',sans-serif;">
			<span style="color:#C5B358;">About Us</span>
		</h2>
	<p class="center">
		We are a group of college students with a passion for film making and Pittsburgh sports.  Through the various video compilations that you can find on this site, we have combined these two passions to make something awesome! Send us a message!
	</p>
	</div>
	<div class="contact">
		<form action="about.php" method="POST">
			<span style="color:#C5B358;"><?php echo $msg ?></span><br />
			<input type="text" name="name" placeholder="Name"><br />
			<input type="email" name="email" placeholder="Email"><br />
			<input type="text" name="subject" placeholder="Subject"><br />
			<textarea name="message" placeholder="Message"></textarea><br />
			<input type="submit" name="submit" value="Send">
			
		</form>
	</div>
<?php
	include 'footer.php';
?>