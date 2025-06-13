<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE html>
<html>
<head>
    <link href="Visual.css" rel="stylesheet"/>
    <meta charset="UTF-8" />
    <title>hangard</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>hangard<h1>
        </div>
        <div>
            <input list="items" class="serchbar" id="item" name="item" placeholder="Wybierz produkt">
            <datalist id="items">
         
            </datalist>
        </div>
    <div class ="head-buttons">
        <button class="konto">koszyk</button>
        <a href="logout.php">
        <button class="koszyk">wyloguj</button>
        </a>
    </div>
    </header>
    <div>
        <footer>
            <nav>
            <a href="https://www.instagram.com/" target="_blank">
              <img class="img" src="/Xampp-Project/img/Instagram.png" alt="insta">
            </a>
            <a href="https://www.facebook.com/" target="_blank">
              <img class="img" src="/Xampp-Project/img/Facebook.png" alt="fb">
            </a>
            <a href="https://github.com/Domin808/Xampp-Project " target="_blank">
                <img class="img" src="/Xampp-Project/img/Github.png" alt="git">
            </a>   
            </nav> 
        <p>Created by Dominik C.</p>       
        </footer>
    </div>
</body>
</html>