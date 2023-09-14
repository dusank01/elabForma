<?php require("script.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="How to store form data in a json file with php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Prijava za ispit</title>
</head>
<body>

	<h1>Prijava za ispit iz Elektronskog poslovanja</h1>

	<form action="" method="post">
		<h3>Prijavi se:</h3>
		<label>Unesi imejl</label>
		<input type="email" name="email" value="mail@mail.com">

		<label>Unesi ime i prezime</label>
		<input type="text" name="name" value="Ime Prezime">

		<label>Unesi broj indeksa</label>
		<input type="text" name="nindex" value="xxxx/xxxx">

		<input type="submit" name="submit" value="Prijavi se">

		<p class="error"><?php echo @$error; ?></p>
		<p class="success"><?php echo @$success; ?></p>
	</form>
	
</body>
</html>