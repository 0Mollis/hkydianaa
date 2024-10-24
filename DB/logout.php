<?php $db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "lab";
$my_tab = "lab2";

$link = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($mysqli->connect_error) {
    die('Ошибка: ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}



session_start();


session_unset();   // Очистка переменных сессии
session_destroy(); // Уничтожение сессии




header("Location: login.php");
exit();
?>
