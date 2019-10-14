<?php 
require_once('../config/db_conncetion.php');


function verifyUser($email) {
  $conn = openConnection();
  
  $query = $conn->prepare('SELECT * FROM users WHERE email = :email');
  $query->bindParam(':email', $email);
  
  $query->execute();
  return $query->rowCount();  
}

?>