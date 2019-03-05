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
    <?php
      if(isset($_GET['signup'])){
        if($_GET['signup'] == "success"){
          echo '<p class="signup-success">Signup successful!</p>';
        }
      }
      else if (isset($_GET['error'])){
        if ($_GET['error'] == "emptyfields"){
          echo '<p class="signup-error">Fill in all fields!</p>';
        }
        else if ($_GET['error'] == "nouser"){
          echo '<p class="signup-error">Username "'.$_GET['uname'].'" does not exist!</p>';
        }
      }
     ?>
    <section class="section-main">
  		<div class="register-main">
  			<div class="register-form">
  				<form action="../includes/login.inc.php" method="post" class="login-user">
            <p>Login</p>
            <p>Username or Email</p>
            <?php
              if (isset($_GET['uname'])){
                if ($_GET['uname'] !== ""){
                  echo '<input type="text" name="unameid" value="'.$_GET['uname'].'"><br>';
                }
                else echo '<input type="text" name="unameid"><br>';
              }
              else echo '<input type="text" name="unameid"><br>';
            ?>
  					<p>Password</p>
  					<input type="password" name="pword"><br>
  					<input name="login-user" type="submit" value="Login">
  				</form>
  			</div>
  		</div>
  	</section>
  </body>
</html>
