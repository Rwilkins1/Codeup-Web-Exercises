<!DOCTYPE html>

<html>
	<head>
		<title>Forms</title>
	</head>
	<body>
		<main>
			<h1>GET</h1>
			<?php var_dump($_GET); ?>

			<h1>POST</h1>
			<?php var_dump($_POST); ?>
<hr>
			<h2>Search</h2>
				<form method="GET" action="forms.php">
					<p>
						<label for "Search"></label>
						<input id="Search" name="Search" type="text" autofocus placeholder="Wha-chu Want?">
					</p>
					<p>
						<input type="Submit">
					</p>
				</form>
<hr>
			<h2>Log In</h2>
				<form method="POST" action="forms.php">
					<p>
						<label for "Username"></label>
						<input id="Username" name="Username" type="text" placeholder="Enter Username" required autofocus>
					</p>
					<p>
						<label for="Password"></label>
						<input id="Password" name="Password" type="Password" placeholder="Enter Password" required>
					</p>
					<p>
						<input type="Submit" value="Log In">
					</p>
				</form>
<hr>
			<h2>Sign-Up</h2>
				<form method="POST" action="forms.php">
					<p>
						<label for "Name"></label>
						<input id="Name" name="Name" type="text" placeholder="Enter Name" required autofocus>
					</p>
					<p>
						<label for "Signup_Email"></label>
						<input id="Signup_Email" name="Signup_Email" type="text" placeholder="Enter Valid Email" required>
					</p>
					<p>
						<label for "Signup_Username"></label>
						<input id="Signup_Username" name="Signup_Username" type="text" placeholder="Enter a Username" required>
					</p>
					<p>
						<label for "Signup_Password"></label>
						<input id="Signup_Password" name="Signup_Password" type="Password" placeholder="Enter a Password" required>
					</p>
					<p>
						<label for "Confirm_Password"></label>
						<input id="Confirm_Password" name="Confirm_Password" type="Password" placeholder="Confirm Password" required>
					</p>
					<p>
						<input type="Submit" value="Sign Up!">
					</p>
				</form>
<hr>
			<h2>Contact Me!</h2>
				<form method="POST" action="forms.php">
					<p>
						<label for "Contact_Name">Name</label>
						<input id="Contact_Name" name="Contact_Name" type="text" required>
					</p>
					<p>
						<label for "Contact_Email">Email</label>
						<input id="Contact_Email" name="Contact_Email" type="text" required>
					</p>
					<p>
						<label for "Subject">Subject</label>
						<input id="Subject" name="Subject" type="text" placeholder="(Optional)">
					</p>
					<p>
						<label for "Body">Body</label>
						<textarea id="Body" name="Body" rows="5" cols="40">What's On Your Mind?</textarea>
					</p>
					<p>
						<label for="mailing_list">Sign me up for the mailing list?</label>
						<input type="checkbox" id="mailing list" name="mailing list" value="yes">
					</p>
						<input type="Submit" value="Ask Away!">
					</p>
				</form>
<hr>
			<h2>Pop Quiz!</h2>
				<form method="POST" action="forms.php">
					<p>What is my name?</p>
					<label>
						<input type="radio" name="q1" value="Bob">
						Bob
					</label><br>
					<label>
						<input type="radio" name="q1" value="Fredward">
						Fredward
					</label><br>
					<label>
						<input type="radio" name="q1" value="Reagan">
						Reagan
					</label>
					<p>
						<input type="Submit" value="Gimme'n'answer!">
					</p>
				</form>