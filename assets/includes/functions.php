<?php
	
	function redirect_to( $location = NULL ) {
	  if ($location != NULL) {
	    header("Location: {$location}");
	    exit;
	  }
	}

	function get_note_by_id($id){
		$query = "SELECT * FROM notes WHERE id = '{$id}' AND user_id = '{$_SESSION['user_id']}' LIMIT 1";
		if($result = mysql_query($query)){
			return $result;
		}
	}

?>