<?php
  session_start();
  //to logout users you need to destroy the current session or unset global _SESSION variables
  unset($_SESSION['userId']);
  unset($_SESSION['uname']);
  unset($_SESSION['fname']);
  unset($_SESSION['lname']);

  header("Location: ../pages/index.php");
?>
