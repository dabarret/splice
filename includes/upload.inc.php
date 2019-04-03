<?php
  if (isset($_POST['upload-data'])){ //form's submit button pressed
    //set connection to database
    require 'dbh.inc.php';

    //assign variables with form input
    $title = $_POST['title'];
    $data = $_POST['data'];
    $uID = $_SESSION['userId'];

    //**********CHECK FOR EMPTY FIELDS**************/
    //**********CHECK FOR EMPTY FIELDS**************/
   if (empty($data)){
     header("Location: ../pages/student-page.php?error=nofilechosen");
     exit();
   }
   //**********INPUTS ARE VALID**************/
   else {
     //create a prepared statement
     $sql = "INSERT INTO ITEM (
       UserID,
       Title,
       ItemData
     ) VALUES (?,?,?)";
     $statement = mysqli_stmt_init($conn);
     //check if the statement will work
     if (!mysqli_stmt_prepare($statement, $sql)){
       header("Location: ../pages/student-page.php?error=sqlerror");
       exit();
     }
     else {
       //bind all params to statement
       mysqli_stmt_bind_param($statement, "sss",
         $uID,
         $title,
         $data
       );
     }
   }
