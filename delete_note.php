<?php
require_once("assets/includes/connection.php");
require_once("assets/includes/functions.php");
require_once("assets/includes/session.php");
confirm_login();

if($result = mysql_query("DELETE FROM notes WHERE id = '{$_GET['note']}' LIMIT 1")){
	redirect_to("index.php");
}

?>

<?php mysql_close($connection); ?>