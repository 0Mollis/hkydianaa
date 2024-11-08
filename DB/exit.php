<?php
session_start();
unset($_SESSION["loginUser"]);
unset($_SESSION["passwordUser"]);
header("Location: index.php?id=1");
?>