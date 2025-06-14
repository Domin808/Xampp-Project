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
    <link href="login.css" rel="stylesheet"/>   
	<meta charset="utf-8" />
	<title>Forum Hangard</title>
</head>

<body>
    <div class="login">
	<div class="text">
	<h1>Zaloguj sie</1>
    <h3>by korzystać z Forum<br /><br />
    </div>
	<form class="text"action="zaloguj.php" method="post">
	
		Login: <br /> <input class="serchbar" type="text" name="login" /> <br />
		Hasło: <br /> <input class="serchbar" type="password" name="haslo" /> <br /><br />
		<button class ="btn">Zaloguj
		<input type="submit" hidden/>
		</button>
	</form>

<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
    <br/>
	<br/>
        <div class = "vbar">
        <ul>
            <li><a href="rejestracja.php">Zarejestruj sie</a><li>
            <li><a href="">Pomoc</a></li>
        </ul>
        </div>
    </div>
</body>
</html>