<?php
	session_start();
	require_once 'connect.php';
	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];

	if ($password === $password_confirm) {
		$password = md5($password);
		mysqli_connect($connect, query:"INSERT INTO `user` (`id`,`login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password');");
		$_SESSION['message'] = 'Регистрация прошла успешно';
		header(string: 'Location:../index.html')
	} else {
		$_SESSION['message'] = 'Пароли не совпадают';
		header(string: 'Location:../registr.php')
	}

?>