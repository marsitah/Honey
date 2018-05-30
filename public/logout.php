<?php
session_start();
session_destroy();
header("Location:/M5project/public/login.php");
?>