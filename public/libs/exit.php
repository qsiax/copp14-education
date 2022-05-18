<?php 
			setcookie('users', $login, time() - 3600, "/");
			setcookie('surname', $users['surname'], time() - 3600, "/");
			setcookie('name', $users['name'], time() - 3600, "/");
			header('Location: /')
?>