<?php
require_once("assets/includes/connection.php");
require_once("assets/includes/functions.php");
require_once("assets/includes/session.php");

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hashed_password = sha1($password);
	
	$query = "SELECT * FROM users WHERE username = '{$username}' AND hashed_password = '{$hashed_password}' LIMIT 1";
	
	$result = mysql_query($query);
	
	if(mysql_num_rows($result) == 1){
		$user = mysql_fetch_array($result);
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['username'] = $user['username'];
		redirect_to("index.php");
	} else {
		$message = "Sorry Your username/password are wrong";
	}
}

require_once("assets/includes/header.php");
?>
<div data-role="page" id="home" data-theme="d">
	<div data-role="header" data-theme="d">
		<h1>Login 4 your Notes</h1>
		<a href="register.php" data-role="button" data-transition="slideup">Register</a>
	</div>
	<div data-role="content">
		<h3><?php echo $message; ?></h3>
		<form action="login.php" method="post">
			<label for="username_field">Username:</label><input type="text" name="username"/>
			<label for="password_field">Password:</label><input type="password" name="password">
			<input type="submit" name="submit" value="Login">
		</form>
	</div>
</div>
<?php
require_once("assets/includes/footer.php");
?>