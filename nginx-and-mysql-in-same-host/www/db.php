<?php

$host = 'mysqldb';

$username = 'root';
$password = 'root';

$database = 'mydefaultdatabase';

try {
  $connection = new \PDO('mysql:host=' . $host . ';database=' . $database, $username, $password);

  echo '<h2>Successfully connected!</h2>';
} catch (\PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
}
