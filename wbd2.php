<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="wbd.css">
	<title>13513018_Steven Andianto</title>
</head>
<body>
	<h1>Simple StackExchange</h1>
	<br>
	<h2>What's your question?</h2>
	<hr>
	<br>
	<div align="center">
	<form name:"Question" action="wbd.php" method="post">
	<input type="text" id="textbox" name="InputName" placeholder=" Name" >
	<input type="text" id="textbox" name="InputEmail" placeholder=" Email">
	<input type="text" id="textbox" name="InputQuestionTopic" placeholder=" Question Topic">
	<textarea id="textarea" name="InputContent" placeholder=" Content"></textarea>		
	<input type="submit" id="post" name="Post" value="Post">
	</form>
	</div>
	<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	echo 'edit/delete?'.$edit;
	}
	?>
</body>