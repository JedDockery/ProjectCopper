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
			$nameErr = $emailErr = "";
			$name = $email = "";
		
		
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				//name
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
			//email
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
			}
				
			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			


			//sql section
			$servername = "50.62.209.47";
			$username = "jeddockery";
			$password = "^4kuJ1x4";
			$dbname = "jeddockery";

			try {
				//connect to db
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				//query from DB
				$sql = "select firstname from MyGuests;";
				
				//array initalize
				$result = mysql_query($conn, $sql);
				$data = array();
				
				//if a row was effected, pull data and push to array data[]
				if(mysql_num_rows($result)>0){
					while($row = mysql_fetch_assoc($result)){
						$data[] = $row;
					}
				}
				print_r($data);
				
				//close connection
				$conn = null;
				
				
			}
			catch(PDOException $e){
				echo "Connection failed: " . $e->getMessage();
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
			
			<br><br>
			<input type="submit" name="submit" value="Submit">  
		</form>

		<?php
			echo "<h2>Your Input:</h2>";
			echo "Name: ".$name;
			echo "<br>";
			echo "E-mail: ".$email;
			echo "<br>";
		?>
	</body>
</html>


