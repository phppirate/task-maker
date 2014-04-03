<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JQuery Mobile</title>
	<script src="themes/jquery.js"></script>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
	<link rel="stylesheet" href="themes/jquery.mobile-1.3.1/jquery.mobile-1.3.1.min.css">
	<link rel="stylesheet" href="themes/jquery.mobile-1.3.1/jquery.mobile.structure-1.3.1.min.css">
	<link rel="stylesheet" href="themes/Zodiak.min.css">
	<link rel="stylesheet" href="themes/my.css">
	<link type="text/css" rel="apple-touch-icon-precomposed" href="assets/img/logo.png" />
	<script src="themes/jquery.mobile-1.3.1/jquery.mobile-1.3.1.min.js"></script>
	<script src="themes/my.js"></script>
	<script type="text/javascript" src="assets/tinymce/js/tinymce/tinymce.js"></script>
	<script type="text/javascript">
	var milestone1 = {
		// General options
		mode : "exact",
		elements : "main",
		plugins : 'tabfocus,table',
		tabfocus_elements: ':prev,:next',
		object_resizing: false,

/*
		theme_advanced_buttons1 : "tablecontrols,|,undo,redo",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_toolbar_name1 : "Command",
		theme_advanced_toolbar_name2 : "Format",
		theme_advanced_toolbar_align : "left",
		theme_advanced_toolbar_location : "top"
*/
};
tinymce.init(milestone1);</script>
<style>
textarea{
	height: 200px;
}
</style>
</head>
<body>