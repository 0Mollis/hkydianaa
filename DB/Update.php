<?php
session_start();
?>
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

$link = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($mysqli->connect_error) {
    die('Ошибка: ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
$query = "SELECT `id` FROM lab2";
$result = mysqli_query($link,$query);

if (isset($_SESSION["loginUser"])) {
	foreach($result as $row){
	echo ($row["id"]);
	echo (' <a href="update.php?id='.$row["id"].'">Изменить</a> ');
	echo ('<a href="index.php?id='.$row["id"].'">Перейти</a><br><br>');
	}
	echo ('<a href="update.php">Убрать textarea</a><br><br>');
	$id = "не определено";
	if (isset($_GET["id"])) {
		$id = $_GET["id"];

		$query = "SELECT `text` FROM lab2 WHERE id =".$id;
		$result = mysqli_query($link,$query);
		while ($rows = mysqli_fetch_array($result)) {
			echo('<form method="POST"><textarea name="upd">'.$rows['text'].'</textarea><br><input type="submit" name="but"></form>');
		}
		$forUpdate = "Пусто";
		if (isset($_POST["upd"])) {
			$forUpdate = $_POST["upd"];
			$query = "UPDATE `lab2` SET `text` ='".$forUpdate."'WHERE `id` ='".$id."';";
			$result = mysqli_query($link,$query);	
		}
	}
	echo '<a href="exit.php">Выйти</a>';
}
else{
	header("Location: index.php?id=1");
}
?>
</body>
</html>