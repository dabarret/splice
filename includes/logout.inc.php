<?php
  session_start();
  //to logout users, use session_destroy() and session_unset()
  session_unset();
  session_destroy();
  header("Location: ../pages/index.php");
