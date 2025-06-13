<?php

	session_start();
	
	if (!isset($_SESSION['udanarejestracja']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}
	
	if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
	if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
	if (isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);
	
    if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
	if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
	if (isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);
	
?>
 
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
    <link href="witamy.css" rel="stylesheet"/>  
	<title>Hangard Forum</title>
</head>

<body>
	<div class="thx">
	<h1 class= "txt">Dziękujemy za rejestrację w serwisie!</h1><h2 class="txt">Możesz już zalogować się na swoje konto!</h2><br /><br />
	
	<a href="index.php">
	<button class="btn">Zaloguj się	</button>
	</a>

	<br /><br />
	</div>
</body>
</html>