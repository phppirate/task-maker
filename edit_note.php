<?php
require_once("assets/includes/connection.php");
require_once("assets/includes/functions.php");
require_once("assets/includes/session.php");
confirm_login();

if(isset($_POST['submit'])){
	
	$title = $_POST['title'];
	$priority = $_POST['priority'];
	
	$query = "UPDATE notes SET title = '{$title}', level = '{$priority}' WHERE id = '{$_GET['note']}' LIMIT 1";
	
	if($result = mysql_query($query)){
		redirect_to("index.php");
	}
}

$result = get_note_by_id($_GET['note']);
$note = mysql_fetch_array($result);

require_once("assets/includes/header.php");
?>
<div data-role="page" id="add-note" data-theme="d">
	<div data-role="header" data-theme="d">
		<a href="index.php" data-transition="slidedown" data-role="button" data-icon="delete" data-iconpos="left">Cancel</a>
		<h1>Edit A Note</h1>
	</div>
	<div data-role="content">
		
		<form action="edit_note.php?note=<?php echo $_GET['note']; ?>" data-ajax="false" method="post">
		  <fieldset data-role="controlgroup" data-type="horizontal">
            <legend>Priority: </legend>
            <input type="radio" name="priority" id="radio-choice-h-41" value="0" <?php if($note['level'] == 0){ echo "checked=\"checked\""; } ?>>
            <label for="radio-choice-h-41">None</label>
            <input type="radio" name="priority" id="radio-choice-h-4a" value="1" <?php if($note['level'] == 1){ echo "checked=\"checked\""; } ?>>
            <label for="radio-choice-h-4a">One</label>
            <input type="radio" name="priority" id="radio-choice-h-4b" value="2" <?php if($note['level'] == 2){ echo "checked=\"checked\""; } ?>>
            <label for="radio-choice-h-4b">Two</label>
            <input type="radio" name="priority" id="radio-choice-h-4c" value="3" <?php if($note['level'] == 3){ echo "checked=\"checked\""; } ?>>
            <label for="radio-choice-h-4c">Three</label>
          </fieldset>
            
            <label for="note_title_field">Title:</label><input type="text" name="title" value="<?php echo $note['title']; ?>" id="note_title_field">
			<input type="submit" data-transition="slidedown" name="submit" value="Update Note" data-icon="refresh" data-iconpos="top"/>
		  
		</form>
	</div>
</div>
<?php
require_once("assets/includes/footer.php");
?>