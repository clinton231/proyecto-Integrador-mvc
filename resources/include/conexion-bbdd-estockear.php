<?php
include "../resources/config/variables-conexion-bbdd.php";

try {
 $conn = new \PDO("mysql:host=$servername;port=$port;dbname=" . $db . ";charset=utf8", $username, $password);
 // set the PDO error mode to exception
 $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
 // echo "Connected successfully";
} catch (Exception $e) {
 echo "Connection failed: " . $e->getMessage();
 die(); // exit;
}

?>