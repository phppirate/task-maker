<?php
require_once("assets/includes/connection.php");
require_once("assets/includes/functions.php");
require_once("assets/includes/session.php");
confirm_login();

$query = "SELECT * FROM users WHERE id = '{$_SESSION['user_id']}' LIMIT 1";
$result = mysql_query($query);
$user = mysql_fetch_array($result);


require_once("assets/includes/header.php");
?>
<div data-role="page" id="add-note" data-theme="d">
	<div data-role="header" data-theme="d">
		<a href="index.php" data-transition="slidedown" data-role="button" data-icon="home" data-iconpos="notext">Back Home</a>
		<h1>My Profile</h1>
		<a href="logout.php" data-transition="slidedown" data-role="button" data-icon="delete" data-iconpos="right">Logout</a>
	</div>
	<div data-role="content">
		<form action="edit_note.php?note=<?php echo $_GET['note']; ?>" method="post" data-transition="slidedown">
			<label for="note_title_field">Username:</label><input type="text" name="title" value="<?php echo $user['username']; ?>" id="note_title_field">
			<label for="note_title_field">Email:</label><input type="text" name="title" value="<?php echo $user['email']; ?>" id="note_title_field">
			<input type="submit" data-transition="slidedown" name="submit" value="Update" data-icon="refresh" data-iconpos="top"/>
		</form>
	</div>
</div>
<?php
require_once("assets/includes/footer.php");
?>