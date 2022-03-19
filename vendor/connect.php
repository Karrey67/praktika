<?php
	$connect = mysqli_connect(host:'localhost',user:'root',password:'',database:'content');
	if (!$connect) {
		die('Error connect to DataBase');
	}
?>