<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appliances";

	if(isset($_POST['app1on'])){

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			$sql = "UPDATE devices SET status='1' WHERE name='app-1'";

			if ($conn->query($sql) === TRUE) {
			//  echo "Record updated successfully";
			} else {
			  echo "Error updating record: " . $conn->error;
			}

			$conn->close();
	}

	if(isset($_POST['app1off'])){

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			$sql = "UPDATE devices SET status='0' WHERE name='app-1'";

			if ($conn->query($sql) === TRUE) {
			//  echo "Record updated successfully";
			} else {
			  echo "Error updating record: " . $conn->error;
			}

			$conn->close();
	}

	if(isset($_POST['app2on'])){

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			$sql = "UPDATE devices SET status='1' WHERE name='app-2'";

			if ($conn->query($sql) === TRUE) {
			 // echo "Record updated successfully";
			} else {
			  echo "Error updating record: " . $conn->error;
			}

			$conn->close();
	}

	if(isset($_POST['app2off'])){

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			$sql = "UPDATE devices SET status='0' WHERE name='app-2'";

			if ($conn->query($sql) === TRUE) {
			 // echo "Record updated successfully";
			} else {
			  echo "Error updating record: " . $conn->error;
			}

			$conn->close();
	}
?>