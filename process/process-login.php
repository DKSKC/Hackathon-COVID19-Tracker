<?php
session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];

  try {
    if (!$email || !$password) {
      throw new Exception('Incomplete credentails');

    }

    @ $db = new mysqli('127.0.0.1:3306', 'student', '123qwe', 'php_hackathon_db');
    //validation if connected to database properly
    $dbError = mysqli_connect_errno();
    if ($dbError) {
      throw new Exception('Could not connect to database. Error');
    }

    //select $query
    $query = 'select * from user_info where EMAIL_ADDRESS = ? and password = ?';
    $stmt = $db->prepare($query);
    $hasedPassword = hash('sha512',$password);
    $stmt->bind_param('ss', $email, $hasedPassword );
    $stmt->execute();

    $result = $stmt->get_result();
    //fetch_assoc pointer
    if ($result->fetch_assoc()) {
      $_SESSION['email'] = $email;
      //if there something fetched redirected to the location
      header('Location:../landing-page.php');
    }else {
      //if none throw exception
      throw new Exception('Incorrect Credentials');

    }
  } catch (Exception $e) {
    header('Location:../login-register/login.php?error='.$e->getMessage());
  }


 ?>
