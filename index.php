<?php
echo "<h3>HELLO WORLD!</h3>";

echo "<h2>PHP: " . phpversion() . "</h2>";

$mysqli = new mysqli(getenv('MYSQL_HOST'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
$q = $mysqli->query("SELECT VERSION()");
$mysql_ver = mysqli_fetch_all($q)[0][0];
echo "<h2>MYSQL: $mysql_ver</h2>";

