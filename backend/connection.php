<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "inxh-web";

  try {
    $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
  } catch (PDOException $e) {
    echo "error: " . $e->getMessage();
  }
?>
