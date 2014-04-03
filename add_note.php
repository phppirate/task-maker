<?php
require_once("assets/includes/connection.php");
require_once("assets/includes/functions.php");
require_once("assets/includes/session.php");
confirm_login();
if(isset($_POST['submit'])){
	
	$title = $_POST['title'];
	$priority = $_POST['priority'];
	
	$query = "INSERT INTO notes(user_id, title, level) VALUES('{$_SESSION['user_id']}', '{$title}', '{$priority}')";
	
	if($result = mysql_query($query)){
		redirect_to("index.php");
	}
	
}

require_once("assets/includes/header.php");
?>
<div data-role="page" id="add-note" data-theme="d">
	<div data-role="header" data-theme="d">
		<a href="index.php" data-transition="slidedown" data-role="button" data-icon="home" data-iconpos="notext">Back Home</a>
		<h1>Add A Note</h1>
	</div>
	<div data-role="content">
		<form action="add_note.php" method="post" data-ajax="false" data-transition="slidedown">
			<fieldset data-role="controlgroup" data-type="horizontal">
              <legend>Priority: </legend>
              <input type="radio" name="priority" id="radio-choice-h-41" value="0" checked="checked">
              <label for="radio-choice-h-41">None</label>
              <input type="radio" name="priority" id="radio-choice-h-4a" value="1" >
              <label for="radio-choice-h-4a">One</label>
              <input type="radio" name="priority" id="radio-choice-h-4b" value="2" >
              <label for="radio-choice-h-4b">Two</label>
              <input type="radio" name="priority" id="radio-choice-h-4c" value="3" >
              <label for="radio-choice-h-4c">Three</label>
            </fieldset>
			
			<label for="note_title_field">Title:</label><input type="text" name="title" id="note_title_field">
			<input type="submit" data-transition="slidedown" name="submit" value="Add Note" data-icon="check" data-iconpos="top"/>
		</form>
	</div>
</div>
<?php
require_once("assets/includes/footer.php");
?>