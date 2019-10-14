<?php
require '../config/db_conncetion.php';
require '../helpers/verifyuser.php';

$conn = openConnection();

if(isset($_POST['submit'])) {

  $name = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $office = filter_var($_POST['office'], FILTER_SANITIZE_STRING);
  $office_address = filter_var($_POST['officeaddress'], FILTER_SANITIZE_STRING);
  $team = filter_var($_POST['team'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $phone_number = filter_var($_POST['phonenumber'], FILTER_SANITIZE_STRING);

  if(verifyUser($email) > 0) {
    header("Location: ../error.html");
  } else {
      if(!$name || !$office || !$office_address || !$team || !$email || !$phone_number) {
        header("Location: ../error.html");
      } else {

        $query = $conn->prepare("INSERT INTO users (name, office, office_address, team_amount, email, phone_number) VALUES (:name, :office, :office_address, :team_amount, :email, :phone_number)");
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':office', $office, PDO::PARAM_STR);
        $query->bindParam(':office_address', $office_address, PDO::PARAM_STR);
        $query->bindParam(':team_amount', $team, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':phone_number', $phone_number, PDO::PARAM_STR);

        $result = $query->execute();

        if($result) {
          header("Location: ../your-cupcakes-are-on-the-way.html");
        } else {
          header("Location: ../error.html");
          die();
        }
      }
    }
}

 ?>
