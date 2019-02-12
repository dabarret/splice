<!DOCTYPE html>
<html lang="en">
  	<meta name = "viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <title>SPLICE</title>
    <link href="../css/styles.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="https://fonts.iu.edu/style.css?family=BentonSans:regular,bold|BentonSansCond:regular|GeorgiaPro:regular" media="screen" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>
  </head>
<body>
	<header>
		<nav class="main-nav">
			<h1>SPLICE</h1>
			<ul>
				<li><a href="../index.html">HOME</a></li>
				<li><a href="student-page.html">MY PAGE</a></li>
				<li><a href="register-student.html" class="active">REGISTER</a></li>
				<li><a href="about.html">ABOUT</a></li>
			</ul>
			<form action="../includes/login.inc.php" method="post" class="user-login">
				<input type="text" name="uname" placeholder="Username"><br>
  				<input type="password" name="pword" placeholder="Password"><br>
  				<input type="submit" value="Login">
			</form>
		</nav>
	</header>
	<section class="section-main">
		<div class="register-main">
			<div class="register-form">
				<h1>Register</h1>
				<form action="../includes/signup.inc.php" method="post" class="register-user">
					<p>First and Last Name</p>
					<input type="text" name="fname" placeholder="First" value="<?php if(isset($firstname)){echo $firstname;} ?>">
					<input type="text" name="lname" placeholder="Last" value="<?php if(isset($lastname)){echo $lastname;}  ?>"><br>
					<p>Username</p>
					<input type="text" name="uname" value="<?php if(isset($username)){echo $username;} ?>"><br>
					<p>Email</p>
					<input type="email" name="email" value="<?php if(isset($email)){echo $email;}  ?>"><br>
					<p>University Student ID</p>
					<input type="text" name="uniID"><br>
					<p>Password</p>
					<input type="password" name="pword"><br>
					<p>Repeat Password</p>
					<input type="password" name="pwordrepeat"><br>
					<input name="register-user" type="submit" value="Register">
				</form>
			</div>
		</div>
	</section>
</body>
</html>