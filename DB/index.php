<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>БД</title>
	<script type="text/javascript">
	</script>
</head>
<body>
<form id="frm" method="POST">
	<input type="text" name="name" placeholder="Имя">
	<input type="text" name="l_name" placeholder="Фамилия">
	<input type="text" name="age" placeholder="Возраст">
	<input type="text" name="phone" placeholder="Телефон">
	<input type="text" name="dolznost" placeholder="Должность">
	<input type="text" name="zarpl" placeholder="Зарплата">
	<input type="submit" value="Сохранить" onclick="view()">
	<b>
</form>
<?php
$name = $_POST["name"];
$l_name = $_POST["l_name"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$dolznost = $_POST["dolznost"];
$zarpl = $_POST["zarpl"];

$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "lab";
$my_tab = "mytable";

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($mysqli->connect_error) {
    die('Ошибка: ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
$mysqli->query ("INSERT INTO ".$my_tab." (name,l_name,age,phone,dolznost,zarpl) VALUES 
('$name','$l_name','$age','$phone','$dolznost','$zarpl')");


?>
</body>
</html>
