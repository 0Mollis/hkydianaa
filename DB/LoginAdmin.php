<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "lab";
$my_tab = "login";

$link = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($mysqli->connect_error) {
    die('Ошибка: ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
$login = $_POST["name"];
$password = $_POST["password"];

if (isset($_POST["name"])) {
	

	$query = "SELECT * FROM login WHERE login='$login' AND password='$password'";
	$result = mysqli_query($link,$query);
	if($result->num_rows>0) {
	}
	else{
		echo "Неправильный логин или пароль";
	}	
}
?>
<form method="POST">
	<div class="divs">
		<p>Логин:</p>
		<input type="text" name="name" required>
		<p>Пароль:</p>
		<input type="password" name="password" required><br><br>
		<input type="submit">
	</div>
</form>
</body>
</html>