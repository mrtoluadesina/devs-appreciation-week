<?php

function openConnection() {
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpassword = '';
  $dbname = 'dev-app-week';
  $conn;
  try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword, array(PDO::ATTR_PERSISTENT => true));
    return $conn;
  } catch (PDOException $e) {
    echo 'Connection Failed' .$e->getMessage();
  }

}

?>
