<?php
session_start();
session_destroy();
header("location:http://localhost/SportCenter1/login.php");

?>