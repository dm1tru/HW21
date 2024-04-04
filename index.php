<?php

$conf = parse_ini_file(".env");

echo "<h3>HELLO WORLD! (VERSION 3)</h3>";

echo "<h2>PHP: " . phpversion() . "</h2>";

$mysqli = new mysqli($conf['MYSQL_HOST'], $conf['MYSQL_USER'], $conf['MYSQL_PASSWORD']);
$q = $mysqli->query("SELECT VERSION()");
$mysql_ver = mysqli_fetch_all($q)[0][0];
echo "<h2>MYSQL: $mysql_ver</h2>";

