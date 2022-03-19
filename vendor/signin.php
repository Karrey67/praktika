<?php
	session_start();
	require_once 'connect.php';
	$login = $_POST['login'];
	$password = $_POST['password'];
	$check_user = mysqli_query($connect, query:"SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
	if (mysqli_fetch_assoc($check_user);

	} else{
		$_SESSION['message'] = 'Не верный логин или пароль';
	}