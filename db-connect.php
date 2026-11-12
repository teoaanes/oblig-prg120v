<?php

$host = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');

$db=mysqli_connect($host, $username, $password, $database) or die ("Could not connect to database: " . mysqli_connect_error());


?>