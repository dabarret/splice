<?php
	//check to see if that buton has been pressed and has a post method
	 if (isset($_POST['signup-submit'])) {
		 //if it has, run this code
		 //link the database for this page
		 require 'dbh.inc.php';

		 //assign each forms input to its corresponding variable
		 $email = $_POST['mail'];
		 $username = $_POST['uname'];
		 $password = $_POST['pword'];
		 $passwordrepeat = $_POST['pwordrepeat'];

		 //check if any of the input are empty
		 if (empty($email) || empty($username) || empty($password) ||empty($passwordrepeat)){
			 //create an error message if any are empty
			 //inside the url, send back information that has been filled out correctly
			 header("Location: ../signup.php?error=emptyfields&uname=".$username."&mail=".$email);
			 //stop this entire script if user enters this conditional
			 exit();
		 }
		 //check for both invalid email and username
		 else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
			 //send back nothing
			 header("Location: ../signup.php?error=invalidemailusername");
			 //stop this entire script if user enters this conditional
			 exit();
		 }
		 //check if the email is valid
		 //FILTER_VALID_EMAIL just checks if the email is valid
		 //returns true or false
		 else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			 //send back just the username
			 header("Location: ../signup.php?error=invalidemail&uname=".$username);
			 //stop this entire script if user enters this conditional
			 exit();
		 }
		 //check if the username is valid
		 //preg_match scans the uname for any of these charactes, if one isn't valid, error is thrown
		 else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
			 //send back just the email
			 header("Location: ../signup.php?error=invalidusername&mail=".$email);
			 //stop this entire script if user enters this conditional
			 exit();
		 }
		 //check if passwords match
		 else if ($password !== $passwordrepeat) {
			 //send back username and password
			 header("Location: ../signup.php?error=passwordcheck&mail=".$email."&uname=".$username);
			 //stop this entire script if user enters this conditional
			 exit();
		 }
		 //check if username has been taken
		 else {
			 //create a query to scan the database for matching username
			 //use prepared statements to avoid any injections
			 $sql = "SELECT unameUsers FROM users WHERE unameUsers=?"; // use ? as a placeholder
			 //this is a prepared statement
			 //make a connection to the database to use as a variable
			 $statement = mysqli_stmt_init($conn);

			 //try and prepare the sql statement, if theres no error then proceed
			 if (!mysqli_stmt_prepare($statement, $sql)) {
				 //display the error
				 header("Location: ../signup.php?error=sqlerror");
				 exit();
			 }
			 else { //if theres no error from the prepare statement
				mysqli_stmt_bind_param($statement, "s", $username); //bind the parameters to the statment
				mysqli_stmt_execute($statement); //execute the new statement
				mysqli_stmt_store_result($statement); //returns true or false
				$resultCheck = mysqli_stmt_num_rows($statement); //stores the number of occurences of that username
				//if there is a match, it will be greater than 0
				 if ($resultCheck > 0){
					 //send back the email with a username taken error
					header("Location: ../signup.php?error=usertaken&mail=".$email);
				 	exit();
				 }
				 else { //insert new user into database
					 $sql = "INSERT INTO users (unameusers, emailUsers, pwdUsers) VALUES (?,?,?)"; //insert into users, use palceholders for now
					 $statement = mysqli_stmt_init($conn);

					 if (!mysqli_stmt_prepare($statement, $sql)) {
						 //display the error
						 header("Location: ../signup.php?error=sqlerror");
						 exit();
					 }
					 else { //if theres no error from the prepare statement
						 $hashedpwd = password_hash($password, PASSWORD_DEFAULT); //hash the password before binding
						 mysqli_stmt_bind_param($statement, "sss", $username, $email, $hashedpwd); //bind the parameters to the statment
						 mysqli_stmt_execute($statement); //execute the new statement
						 header("Location: ../signup.php?signup=success");
						 exit();
					}
				 }
		 	}
		 }
		 msqli_stmt_close($statement);
		 mysqli_close($conn);
	 }

	 else {
		 header("Location: ../signup.php");
	 }
