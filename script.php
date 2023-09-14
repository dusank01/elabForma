<?php 
	if(isset($_POST['submit'])){
		$new_message = array(
			"email" => $_POST['email'],
			"name" => $_POST['name'],
			"index" => $_POST['index']
		);

		if(filesize("messages.json") == 0){
		
			$first_record = array($new_message);
			
			$data_to_save = $first_record; 
		}else{
			
			$old_records = json_decode(file_get_contents("messages.json"));

			
			array_push($old_records, $new_message);

			$data_to_save = $old_records;
		}
		$servername = "localhost";
		$username = "admin";
$password = "admin";
$dbname = "elab";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')";
		if(!file_put_contents("messages.json", 
		json_encode($data_to_save, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX)){
			
			$error = "Greška";
		}else{
			
			$success =  "Uspešna prijava";
		}
	}
