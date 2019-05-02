<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname = "localhost";
$database = "Garage";
$username = "root";
$password = "Cloud1880";
$brains = mysqli_connect($hostname, $username, $password) or trigger_error(mysqli_error(),E_USER_ERROR); 
?>