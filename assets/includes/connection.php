<?php
	$connection = mysql_connect("localhost","root","root");
	if(!$connection){
		die("there was a database connection error" . mysql_error());
	}
	$db_select = mysql_select_db("2in1notes");
	if(!$db_select){
		die("there was a database connection error" . mysql_error());
	}
?>