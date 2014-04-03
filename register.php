<?php
require_once("assets/includes/connection.php");
require_once("assets/includes/functions.php");
require_once("assets/includes/session.php");

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	
	if($pass1 == $pass2){
		
		$hashed_password = sha1($pass2);
		$query = "INSERT INTO users(username, email, hashed_password) VALUES('{$username}','{$email}','{$hashed_password}')";
		
		if($result=mysql_query($query)){
			$insert = mysql_insert_id();
			$result = mysql_query("SELECT * FROM users WHERE id = '{$insert}' LIMIT 1");
			$user = mysql_fetch_array($result);
			
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['username'] = $user['username'];
			
			redirect_to("index.php");
		}
		
	} else {
		$message = "Passwords Did not Match";
	}
}

require_once("assets/includes/header.php");
?>
<div data-role="page" id="home" data-theme="d">
	<div data-role="header" data-theme="d">
		<h1>Register Account</h1>
		<a href="login.php" data-role="button" data-icon="delete" data-iconpos="left" data-transition="slidedown">Cancel</a>
	</div>
	<div data-role="content">
		<h3><?php echo $message; ?></h3>
		<form action="register.php" method="post">
			<label for="username_field">Name:</label><input type="text" name="username"/>
			<label for="username_field">Email:</label><input type="Email" name="email"/>
			<label for="password_field">Password:</label><input type="password" name="pass1">
			<label for="password_field">Confirm Password:</label><input type="password" name="pass2">
			<input type="submit" name="submit" value="Register">
		</form>
	</div>
</div>
<?php
require_once("assets/includes/footer.php");
?>