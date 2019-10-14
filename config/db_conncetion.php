<?php

function openConnection() {
  $dbhost = 'locahost';
  $dbuser = 'root';
  $dbpassword = '';
  $dbname = 'dev-app-week';

  try {

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword, array(PDO::ATTR_PERSISTENT => true));

  } catch (PDOException $e) {
    echo 'Connection Failed' .$e->getMessage()
  }

  return $conn;

}

?>
