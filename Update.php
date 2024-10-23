<!DOCTYPE html>
<html>
<head>
	<title>изменение</title>
</head>
<body>
<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "lab";
$my_tab = "lab2";
$tab_id = 2;

$link = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($mysqli->connect_error) {
    die('Ошибка: ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
$query = "SELECT `id` FROM lab2";
$result = mysqli_query($link,$query);

foreach($result as $row){
echo ($row["id"]." ");
echo ("<button>Изменить</button onclick=button".$row["id"]."><br><br>");
}



/*$query = "SELECT `text` FROM lab2 WHERE id = 2";
$result = mysqli_query($link,$query);
while ($rows = mysqli_fetch_array($result)) {
	echo('<form method="POST"><textarea name="upd">'.$rows['text'].'</textarea><br><input type="submit" name="but"></form>');
}
$forUpdate = $_POST["upd"];
$query = "UPDATE `lab2` SET `text` ='".$forUpdate."'WHERE `id` ='".$tab_id."';";
$result = mysqli_query($link,$query);*/
?>
</body>
</html>
