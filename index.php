<?php
require_once("assets/includes/connection.php");
require_once("assets/includes/functions.php");
require_once("assets/includes/session.php");
confirm_login();

require_once("assets/includes/header.php");
$result = mysql_query("SELECT * FROM notes WHERE user_id = '{$_SESSION['user_id']}' ORDER BY id DESC");
?>
<div data-role="page" id="home" data-theme="d">
	<div data-role="header" data-theme="d">
		<a href="profile.php" data-role="button" data-transition="slideup" data-icon="gear" data-iconpos="notext">Your Profile</a>
		<h1>2 In 1 Notes</h1>
		<a href="add_note.php" data-role="button" data-transition="slideup" data-icon="plus" data-iconpos="notext">Add A Note</a>
	</div>
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">Your Notes<span class="ui-li-count"><?php echo mysql_num_rows($result); ?></span></li>
			<?php
			while($note = mysql_fetch_array($result)){
				echo "<li><a href=\"edit_note.php?note={$note['id']}\" data-transition=\"slide\"><img src=\""; if($note['level'] == 1){ echo "assets/img/icon-01.png"; } else if($note['level'] == 2){ echo "assets/img/icon-02.png"; } else if($note['level'] == 3){ echo "assets/img/icon-03.png"; } else { echo "assets/img/icon-00.png"; }  echo "\">{$note['title']}</a><a href=\"delete_note.php?note={$note['id']}\" data-icon=\"delete\">Delete Note</a></li>";
			}
			?>
		</ul>
	</div>
</div>
<?php
require_once("assets/includes/footer.php");
?>