<?php include_once("../includes/headers.inc.php"); ?>
<!DOCTYPE html>
<html lang="en">
<body>
	<header>
		<?php
			$activePage = "registerStudent";
			include_once("../includes/nav.inc.php");
		?>
	</header>
	<section class="section-main">
		<div class="register-main">
			<div class="register-form">
				<h1>Register</h1>
				<form action="../includes/signup.inc.php" method="post" class="register-user">
					<p>First and Last Name</p>
					<?php
					//SAVING FIRST AND LAST NAME IF RELOADED
						if (isset($_GET['fname'])){
							if ($_GET['fname'] !== ""){
								echo '<input type="text" name="fname" placeholder="First" value="'.$_GET['fname'].'">';
							}
							else echo '<input type="text" name="fname" placeholder="First">';
						} else echo '<input type="text" name="fname" placeholder="First">';

						if (isset($_GET['lname'])){
							if ($_GET['lname'] !== ""){
								echo ' <input type="text" name="lname" placeholder="Last" value="'.$_GET['lname'].'">';
							}
							else echo ' <input type="text" name="lname" placeholder="Last">';
						} else echo ' <input type="text" name="lname" placeholder="Last">';
					?>
					<p>Username</p>
					<?php
					//SAVING USERNAME IF RELOADED
						if (isset($_GET['uname'])){
							if ($_GET['uname'] !== ""){
								echo '<input type="text" name="uname" value="'.$_GET['uname'].'">';
							}
							else echo '<input type="text" name="uname"><br>';
						} else echo '<input type="text" name="uname"><br>';
					?>
					<p>Email</p>
					<?php
					//SAVING EMAIL IF RELOADED
						if (isset($_GET['mail'])){
							if ($_GET['mail'] !== ""){
								echo '<input type="email" name="email" value="'.$_GET['mail'].'">';
							}
							else echo '<input type="email" name="email"><br>';
						} else echo '<input type="email" name="email"><br>';
					?>
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
	<?php
	//output errors when trying to register a user
		if(isset($_GET['error'])){
			if ($_GET['error'] == "emptyfields"){
				echo '<p class="signup-error">Fill in all fields!</p>';
			}
			else if ($_GET['error'] == "invalidemailusername"){
				echo '<p class="signup-error">Invalid email and username!</p>';
			}
			else if ($_GET['error'] == "invalidemail"){
				echo '<p class="signup-error">Invalid email!</p>';
			}
			else if ($_GET['error'] == "invalidusername"){
				echo '<p class="signup-error">Invalid username! May only contain letters and numbers.</p>';
			}
			else if ($_GET['error'] == "passwordcheck"){
				echo '<p class="signup-error">Passwords do not match!</p>';
			}
		}
	?>
</body>
</html>
