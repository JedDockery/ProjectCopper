<!doctype html>
<!--Create a Web Application/Site with the following:

Project should be on a separate sub-domain

Responsive Break Points
- Desktop: > 1024
- Tablet: 1024 to 400
- Mobile: < 400

Have at least two (2) forms on the site (properly validated/collected into a DB)

Have a page to search for results from the form entries that uses AJAX to either auto-complete search text fields or query the data for display

Implement two (2) different API implementations included in your site

This project is designed to pull together everything we have learned during the semester

You should be able to re-use a good bit of material from your Labs/Projects/Midterm, but you should still set aside plenty of time to work on this

You can use PHP/MySQL, Python/SQLite, or C#.NET/MSSQL to complete this project

Submit a link to your site and a zip file containing the entire site. If using MySQL or MSSQL, include an export of the DB structure. If using SQLite, include the SQLite database file.
-->
<?php
	include 'project.jeddockery.com/dbh.php'
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
		<title>CSCI 3000 final project</title>
		<link href="breakpoints.css" rel="stylesheet" type="text/css"/>
		<script src="script.js"></script>
	</head>
	
	<body>
		<?php
			// define variables and set to empty values
			$nameErr = $emailErr = $genderErr = $websiteErr = "";
			$name = $email = $gender = $comment = $website = $citizen = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
					$nameErr = "Name is required";
				} 
				else {
					$name = test_input($_POST["name"]);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
						$nameErr = "Only letters and white space allowed"; 
					}
				}

				if (empty($_POST["email"])) {
					$emailErr = "Email is required";
				} 
				else {
					$email = test_input($_POST["email"]);
					// check if e-mail address is well-formed
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$emailErr = "Invalid email format"; 
					}
				}

				if (empty($_POST["website"])) {
					$website = "";
				} 
				else {
					$website = test_input($_POST["website"]);
					// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
					if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
						$websiteErr = "Invalid URL"; 
					}
				}

				if (empty($_POST["citizen"])) {
					$citizen = "";
				} 
				else {
					$citizen = test_input($_POST["citizen"]);
				}

				if (empty($_POST["comment"])) {
					$comment = "";
				} 
				else {
					$comment = test_input($_POST["comment"]);
				}

				if (empty($_POST["gender"])) {
					$genderErr = "Gender is required";
				} 
				else {
					$gender = test_input($_POST["gender"]);
				}
			}

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>

		<h2>Survey</h2>
		<p><span class="error">* required field</span></p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			Name: <input type="text" name="name" value="<?php echo $name;?>">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>
			E-mail: <input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>
			Website: <input type="text" name="website" value="<?php echo $website;?>">
			<span class="error"><?php echo $websiteErr;?></span>
			<br><br>


			Are you a Citizen:<select name="citizen">
			<option value="yes">yes</option>
			<option value="no">no</option>
			</select>
			<br><br>

			Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
			<br><br>
			Gender:
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
			<span class="error">* <?php echo $genderErr;?></span>
			<br><br>
			<input type="submit" name="submit" value="Submit">  
		</form>

		<?php
			echo "<h2>Your Input:</h2>";
			echo "Name: ".$name;
			echo "<br>";
			echo "E-mail: ".$email;
			echo "<br>";
			echo "Website ".$website;
			echo "<br>";
			echo "Is Citizen? ".$citizen;
			echo "<br>";
			echo "Your comment: ".$comment;
			echo "<br>";
			echo "Choosen gender: ".$gender;
		?>
	</body>
</html>
































