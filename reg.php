<?php
include ('db_connect.php');

if($_POST['enter']){

	$login = $_POST['login'];
	$password = $_POST['password'];
	$query = mysql_query("SELECT * FROM `users` WHERE `login`='$login'");
	$users_data=mysql_fetch_array($query);
	if ($users_data['password'] == md5($password)){
		$token=md5($password.$id.$login);
		setcookie("auth_token",$token);
	mysql_query("UPDATE `users` SET `token`='$token' WHERE `id`=$users_data[id]");
	header("location: /");
	}
	else{
		echo "wrong password";
	}

}
//phpinfo(INFO_VARIABLES);
//var_dump($user_data);
?>

<meta charset="utf-8">
<form action='?' method="post">
	<input type="text" name="login">Логин<Br>
	<input type="password" name="password">Пароль<Br>
	<input type="submit" value="Enter" name="enter"><br/><br/>
</form>