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
/*$name = $_POST["name"];
$l_name = $_POST["l_name"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$dolznost = $_POST["dolznost"];
$zarpl = $_POST["zarpl"];*/

$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "lab";
$my_tab = "lab2";

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($mysqli->connect_error) {
    die('Ошибка: ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}

$result = $mysqli->query ("SELECT `text` FROM lab2");
echo($result);
/*while($row = mysqli_fetch_assoc($result)){
	echo htmlspecialchars_decode(stripslashes($row[0]));
}*/

/*$mysqli->query ("INSERT INTO ".$my_tab." (name,l_name,age,phone,dolznost,zarpl) VALUES 
('$name','$l_name','$age','$phone','$dolznost','$zarpl')");*/


?>
</body>
</html>
