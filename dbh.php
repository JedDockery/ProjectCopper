
 <?php
	$servername = "locahost";
	$username = "dbuser";
	$password = "dbpassword";
	$dbname = "dbname";

	try {
		//connect to db
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Table MyGuests created successfully";
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}

	//close connection
	$conn = null;
?> 