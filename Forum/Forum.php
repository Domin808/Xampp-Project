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
            <input type="text" class="serchbar" id="searchBox" placeholder="Wyszukaj">
        </div>
    <div class ="head-buttons">
        <button class="konto">koszyk</button>
        <a href="logout.php">
        <button class="koszyk">wyloguj</button>
        </a>
    </div>
    </header>
    <main>
    <script>
        document.getElementById('searchBox').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const listItems = document.getElementById('myList').getElementsByTagName('li');
            
            for (let item of listItems) {
                const text = item.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            }
        });
    </script>
    <h1 class = naglowek>Najnowsze wątki na forum</h1>
    
    <ul class="forum-list" id="myList">
        <li class="forum-thread">
            <div class="thread-title">Jak zainstalować najnowszą wersję frameworka?</div>
            <div class="thread-meta">
                <span class="thread-author">JanKowalski</span>
                <span class="thread-date">15 maja 2023, 14:30</span>
            </div>
            <div class="thread-excerpt">
                Szukam pomocy w instalacji najnowszej wersji FrameworkX. Próbowałem już kilku metod z dokumentacji, ale ciągle otrzymuję błąd kompilacji. Czy ktoś mógłby mi pomóc?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 12 odpowiedzi</span>
                <span><i>👁️</i> 245 wyświetleń</span>
                <span><i>👍</i> 8 polubień</span>
            </div>
        </li>
        
        <li class="forum-thread">
            <div class="thread-title">Najlepsze praktyki w testowaniu jednostkowym</div>
            <div class="thread-meta">
                <span class="thread-author">AnnaNowak</span>
                <span class="thread-date">14 maja 2023, 09:15</span>
            </div>
            <div class="thread-excerpt">
                Chciałabym podzielić się moimi doświadczeniami z testowania jednostkowego i jednocześnie zapytać o Wasze najlepsze praktyki. Jak organizujecie swoje testy?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 24 odpowiedzi</span>
                <span><i>👁️</i> 378 wyświetleń</span>
                <span><i>👍</i> 15 polubień</span>
            </div>
        </li>
        
        <li class="forum-thread">
            <div class="thread-title">Problemy z responsywnością strony</div>
            <div class="thread-meta">
                <span class="thread-author">DevMaster</span>
                <span class="thread-date">13 maja 2023, 18:45</span>
            </div>
            <div class="thread-excerpt">
                Moja strona nie wyświetla się poprawnie na urządzeniach mobilnych. Elementy nachodzą na siebie, a menu nie działa. Jakie mogą być przyczyny?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 7 odpowiedzi</span>
                <span><i>👁️</i> 156 wyświetleń</span>
                <span><i>👍</i> 3 polubień</span>
            </div>
        </li>
        
        <li class="forum-thread">
            <div class="thread-title">Przegląd nowych funkcji w JavaScript ES2023</div>
            <div class="thread-meta">
                <span class="thread-author">TechGuru</span>
                <span class="thread-date">12 maja 2023, 11:20</span>
            </div>
            <div class="thread-excerpt">
                Przygotowałem kompleksowy przegląd nowych funkcji, które pojawią się w nadchodzącej wersji ECMAScript. Omawiam m.in. nowe metody tablic i obietnic.
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 32 odpowiedzi</span>
                <span><i>👁️</i> 512 wyświetleń</span>
                <span><i>👍</i> 28 polubień</span>
            </div>
        </li>
        
        <li class="forum-thread">
            <div class="thread-title">Jak zoptymalizować wydajność bazy danych?</div>
            <div class="thread-meta">
                <span class="thread-author">DatabaseExpert</span>
                <span class="thread-date">10 maja 2023, 16:10</span>
            </div>
            <div class="thread-excerpt">
                Nasza aplikacja zaczyna mieć problemy z wydajnością przy większej liczbie użytkowników. Jakie techniki optymalizacji bazy danych polecacie?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 18 odpowiedzi</span>
                <span><i>👁️</i> 321 wyświetleń</span>
                <span><i>👍</i> 10 polubień</span>
            </div>
        </li>
        
        <li class="forum-thread">
            <div class="thread-title">Jak zainstalować najnowszą wersję frameworka?</div>
            <div class="thread-meta">
                <span class="thread-author">JanKowalski</span>
                <span class="thread-date">15 maja 2023, 14:30</span>
            </div>
            <div class="thread-excerpt">
                Szukam pomocy w instalacji najnowszej wersji FrameworkX. Próbowałem już kilku metod z dokumentacji, ale ciągle otrzymuję błąd kompilacji. Czy ktoś mógłby mi pomóc?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 12 odpowiedzi</span>
                <span><i>👁️</i> 245 wyświetleń</span>
                <span><i>👍</i> 8 polubień</span>
            </div>
        </li>
        
        <li class="forum-thread">
            <div class="thread-title">Najlepsze praktyki w testowaniu jednostkowym</div>
            <div class="thread-meta">
                <span class="thread-author">AnnaNowak</span>
                <span class="thread-date">14 maja 2023, 09:15</span>
            </div>
            <div class="thread-excerpt">
                Chciałabym podzielić się moimi doświadczeniami z testowania jednostkowego i jednocześnie zapytać o Wasze najlepsze praktyki. Jak organizujecie swoje testy?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 24 odpowiedzi</span>
                <span><i>👁️</i> 378 wyświetleń</span>
                <span><i>👍</i> 15 polubień</span>
            </div>
        </li>
        <li class="forum-thread">
            <div class="thread-title">Jak zainstalować najnowszą wersję frameworka?</div>
            <div class="thread-meta">
                <span class="thread-author">JanKowalski</span>
                <span class="thread-date">15 maja 2023, 14:30</span>
            </div>
            <div class="thread-excerpt">
                Szukam pomocy w instalacji najnowszej wersji FrameworkX. Próbowałem już kilku metod z dokumentacji, ale ciągle otrzymuję błąd kompilacji. Czy ktoś mógłby mi pomóc?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 12 odpowiedzi</span>
                <span><i>👁️</i> 245 wyświetleń</span>
                <span><i>👍</i> 8 polubień</span>
            </div>
        </li>
        
        <li class="forum-thread">
            <div class="thread-title">Najlepsze praktyki w testowaniu jednostkowym</div>
            <div class="thread-meta">
                <span class="thread-author">AnnaNowak</span>
                <span class="thread-date">14 maja 2023, 09:15</span>
            </div>
            <div class="thread-excerpt">
                Chciałabym podzielić się moimi doświadczeniami z testowania jednostkowego i jednocześnie zapytać o Wasze najlepsze praktyki. Jak organizujecie swoje testy?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 24 odpowiedzi</span>
                <span><i>👁️</i> 378 wyświetleń</span>
                <span><i>👍</i> 15 polubień</span>
            </div>
        </li>
        <li class="forum-thread">
            <div class="thread-title">Jak zainstalować najnowszą wersję frameworka?</div>
            <div class="thread-meta">
                <span class="thread-author">JanKowalski</span>
                <span class="thread-date">15 maja 2023, 14:30</span>
            </div>
            <div class="thread-excerpt">
                Szukam pomocy w instalacji najnowszej wersji FrameworkX. Próbowałem już kilku metod z dokumentacji, ale ciągle otrzymuję błąd kompilacji. Czy ktoś mógłby mi pomóc?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 12 odpowiedzi</span>
                <span><i>👁️</i> 245 wyświetleń</span>
                <span><i>👍</i> 8 polubień</span>
            </div>
        </li>
        
        <li class="forum-thread">
            <div class="thread-title">Najlepsze praktyki w testowaniu jednostkowym</div>
            <div class="thread-meta">
                <span class="thread-author">AnnaNowak</span>
                <span class="thread-date">14 maja 2023, 09:15</span>
            </div>
            <div class="thread-excerpt">
                Chciałabym podzielić się moimi doświadczeniami z testowania jednostkowego i jednocześnie zapytać o Wasze najlepsze praktyki. Jak organizujecie swoje testy?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 24 odpowiedzi</span>
                <span><i>👁️</i> 378 wyświetleń</span>
                <span><i>👍</i> 15 polubień</span>
            </div>
        </li>
        
    </ul>
    </main>
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