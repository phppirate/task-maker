<?php

	session_start();
	
	function logged_in(){
		if(isset($_SESSION['user_id'])){
			return true;
		} else{
			return false;
		}
	}
	
	function confirm_login(){
		if(!logged_in()){
			redirect_to("login.php");
		}
	}

?>