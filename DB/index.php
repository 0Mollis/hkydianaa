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
</form>
<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "lab";
$my_db = "mytable";


/*$link = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die(mysql_error());
$query = "SELECT * FROM mytable";
$result = mysql_query($query,$link);*/


/*$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($mysqli->connect_error) {
    die('Ошибка: ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
$result = $mysqli->query ("INSERT INTO '.$my_db.'(`name`,`l_name`,`age`,`phone`,`dolznost`,`zarpl`) VALUES 
($name,$l_name,$age,$phone,$dolznost,$zarpl)");*/
?>
</body>
</html>
