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
<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "lab";
$my_tab = "lab2";

$link = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($mysqli->connect_error) {
    die('Ошибка: ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
$query = "SELECT `text` FROM lab2 WHERE id = 2";
$result = mysqli_query($link,$query);
while ($rows = mysqli_fetch_array($result)) {
	echo($rows[0]);
}




/*$mysqli->query ("INSERT INTO ".$my_tab." (name,l_name,age,phone,dolznost,zarpl) VALUES 
('$name','$l_name','$age','$phone','$dolznost','$zarpl')");*/


?>
</body>
</html>
