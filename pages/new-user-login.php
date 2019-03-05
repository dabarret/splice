<?php include_once("../includes/headers.inc.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <body>
  	<header>
      <?php
        $activePage = "userLogin";
				include_once("../includes/nav.inc.php");
			?>
  	</header>
    <section class="section-main">
  		<div class="register-main">
  			<div class="register-form">
  				<form action="../includes/login.inc.php" method="post" class="login-user">
            <p>Login</p>
            <p>Username or Email</p>
  					<input type="text" name="unameid"><br>
  					<p>Password</p>
  					<input type="password" name="pword"><br>
  					<input name="login-user" type="submit" value="Login">
  				</form>
  			</div>
  		</div>
  	</section>
  </body>
</html>
