<h3>Вход</h3>
<form action="/php-framework-master/account/login" method="post">
	<p style="color:red"><?php if(isset($error)) echo $error; ?></p>

	<p>Логин</p>
	<p><input type="text" name="login" value="<?php if(isset($login)) echo $login; ?>"></p>
	<p>Пароль</p>
	<p><input type="password" name="password"></p>
	<b><button type="submit" name="login_btn">Вход</button></b>
</form>