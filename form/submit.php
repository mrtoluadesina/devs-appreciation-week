<?php
require '../config/db_conncetion.php';

$conn = openConnection();

if(isset($_POST['submit'])) {

  $name = strip_tags(@$_POST['username']);
  $office = strip_tags(@$_POST['office']);
  $office_address = strip_tags(@$_POST['officeaddress']);
  $team = strip_tags(@$_POST['team']);
  $email = strip_tags(@$_POST['email']);
  $phone_number = strip_tags(@$_POST['phonenumber']);

  if(!$name || !$office || !$office_address || !$team || !$email || !$phone_number) {
    echo 'You are required to fill all fields';
  } else {
    echo $phone_number;
    $query = $conn->prepare("INSERT INTO users (name, office, office_address, team_amount, email, phone_number) VALUES (:name, :office, :office_address, :team_amount, :email, :phone_number)");
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':office', $office, PDO::PARAM_STR);
    $query->bindParam(':office_address', $office_address, PDO::PARAM_STR);
    $query->bindParam(':team_amount', $team, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':phone_number', $phone_number, PDO::PARAM_STR);

    $result = $query->execute();

    if($result) {
      echo 'Submitted successfully';
    } else {
      echo "Didn't work";
      die();
    }

  }

}

 ?>
