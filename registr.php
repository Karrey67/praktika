<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
		<form action="vendor/signup.php" method="post">
			<label>Логин</label>
			<input type="text" name="login" placeholder="Введите свой логин">
			<label>Почта</label>
			<input type="text" name="email" placeholder="Введите свою почту">
			<label>Пароль</label>
			<input type="password" name="password" placeholder="Введите свой пароль">
			<label>Подтверждение пароля</label>
			<input type="password" name="password_confirm" placeholder="Введите свой пароль ещё раз">
			<button>Зарегистрироваться</button>
			<p>
				У Вас уже есть аккаунт? - <a href="main.php">Авториpизируйтесь</a>
			</p>
			<?php
				if ($_SESSION['message']) {
					echo '<p class="msg">' . $_SESSION['message'] . '</p>';
				}
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
			<p class="msg">
			</p>
		</form>
</body>
</html>