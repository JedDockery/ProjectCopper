<?php
	include 'dbh.php';
?>

<?php

	$dataNewCount = $_POST['dataNewCount'];

	$sql = "SELECT * FROM User LIMIT $dataNewCount";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)){
			echo "<p>";
			echo $row['name'];
			echo "<br>";
			echo $row['email'];
			echo "</p>";
		}
	}
	else{
		echo "no data.";
	}

?>