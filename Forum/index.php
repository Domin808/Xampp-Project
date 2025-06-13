<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: Forum.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <link href="Visual.css" rel="stylesheet"/>   
	<meta charset="utf-8" />
	<title>Forum Hangard</title>
</head>

<body>
    <div class="login">
	<div>
	<h1>Zaloguj sie</1>
    <h3>by korzystać z Forum<br /><br />
    </div>
	<form action="zaloguj.php" method="post">
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" value="Zaloguj się" />
	
	</form>

<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
    <br/>
        <div class = "vbar">
        <ul>
            <li><a href="register.php">Zarejestruj sie</a><li>
            <li><a href="">Pomoc</a></li>
        </ul>
        </div>
    </div>
</body>
</html>