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
        <a href="logout.php">
        <button class="logout">wyloguj</button>
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
            <div class="thread-title">Instalacja FrameworkY z poziomu CLI – krok po kroku</div>
            <div class="thread-meta">
                <span class="thread-author">JanKowalski</span>
                <span class="thread-date">15 maja 2023, 14:30</span>
            </div>
            <div class="thread-excerpt">
                Czy ktoś ma doświadczenie z instalacją FrameworkY przez konsolę? Mam problem z zależnościami i nie wiem, gdzie leży błąd. Każda wskazówka mile widziana!
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 12 odpowiedzi</span>
                <span><i>👁️</i> 245 wyświetleń</span>
                <span><i>👍</i> 8 polubień</span>
            </div>
        </li>

        <li class="forum-thread">
            <div class="thread-title">Jak skutecznie pisać testy integracyjne?</div>
            <div class="thread-meta">
                <span class="thread-author">AnnaNowak</span>
                <span class="thread-date">14 maja 2023, 09:15</span>
            </div>
            <div class="thread-excerpt">
                Ostatnio dużo pracuję nad testami integracyjnymi i chciałabym poznać Wasze podejście. Jakie narzędzia i techniki stosujecie, by testy były czytelne i wydajne?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 24 odpowiedzi</span>
                <span><i>👁️</i> 378 wyświetleń</span>
                <span><i>👍</i> 15 polubień</span>
            </div>
        </li>

        <li class="forum-thread">
            <div class="thread-title">CSS Grid vs Flexbox — co lepiej działa na mobile?</div>
            <div class="thread-meta">
                <span class="thread-author">DevMaster</span>
                <span class="thread-date">13 maja 2023, 18:45</span>
            </div>
            <div class="thread-excerpt">
                Próbuję poprawić układ mobilny mojej strony i zastanawiam się, kiedy lepiej używać Grid, a kiedy Flexbox. Czy ktoś może podzielić się przykładami i poradami?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 7 odpowiedzi</span>
                <span><i>👁️</i> 156 wyświetleń</span>
                <span><i>👍</i> 3 polubień</span>
            </div>
        </li>

        <li class="forum-thread">
            <div class="thread-title">Co nowego przynosi ECMAScript 2023?</div>
            <div class="thread-meta">
                <span class="thread-author">TechGuru</span>
                <span class="thread-date">12 maja 2023, 11:20</span>
            </div>
            <div class="thread-excerpt">
                W artykule omawiam zmiany wprowadzone w ES2023, w tym rozszerzenia w iteratorach i nową składnię prywatnych metod. Ciekaw jestem, co sądzicie o tych nowościach.
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 32 odpowiedzi</span>
                <span><i>👁️</i> 512 wyświetleń</span>
                <span><i>👍</i> 28 polubień</span>
            </div>
        </li>

        <li class="forum-thread">
            <div class="thread-title">Sposoby na przyspieszenie zapytań SQL w dużych projektach</div>
            <div class="thread-meta">
                <span class="thread-author">DatabaseExpert</span>
                <span class="thread-date">10 maja 2023, 16:10</span>
            </div>
            <div class="thread-excerpt">
                Pracuję nad optymalizacją wydajności aplikacji, która intensywnie korzysta z bazy danych. Jakie macie sposoby na redukcję czasu wykonania zapytań SQL?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 18 odpowiedzi</span>
                <span><i>👁️</i> 321 wyświetleń</span>
                <span><i>👍</i> 10 polubień</span>
            </div>
        </li>

        <li class="forum-thread">
            <div class="thread-title">Problemy z instalacją bibliotek w Pythonie pod Windows</div>
            <div class="thread-meta">
                <span class="thread-author">JanKowalski</span>
                <span class="thread-date">15 maja 2023, 14:30</span>
            </div>
            <div class="thread-excerpt">
                Mam problem z instalacją pakietów Pythona na Windows 10 – pip wyrzuca błędy zależności. Czy ktoś miał podobną sytuację i wie, jak to obejść?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 9 odpowiedzi</span>
                <span><i>👁️</i> 198 wyświetleń</span>
                <span><i>👍</i> 6 polubień</span>
            </div>
        </li>

        <li class="forum-thread">
            <div class="thread-title">Testowanie komponentów React – narzędzia i strategie</div>
            <div class="thread-meta">
                <span class="thread-author">AnnaNowak</span>
                <span class="thread-date">14 maja 2023, 09:15</span>
            </div>
            <div class="thread-excerpt">
                Pracuję z Reactem i zastanawiam się, które narzędzia do testowania komponentów są najlepsze. Czy lepiej używać RTL, Enzyme, a może coś innego?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 20 odpowiedzi</span>
                <span><i>👁️</i> 342 wyświetlenia</span>
                <span><i>👍</i> 14 polubień</span>
            </div>
        </li>

        <li class="forum-thread">
            <div class="thread-title">Nie działa debugowanie w VS Code – co sprawdzić?</div>
            <div class="thread-meta">
                <span class="thread-author">JanKowalski</span>
                <span class="thread-date">15 maja 2023, 14:30</span>
            </div>
            <div class="thread-excerpt">
                Mam problem z debuggerem w Visual Studio Code. Breakpointy są ignorowane. Czy ktoś wie, od czego zacząć diagnozę?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 11 odpowiedzi</span>
                <span><i>👁️</i> 230 wyświetleń</span>
                <span><i>👍</i> 9 polubień</span>
            </div>
        </li>

        <li class="forum-thread">
            <div class="thread-title">Mockowanie zależności w testach – Wasze podejścia</div>
            <div class="thread-meta">
                <span class="thread-author">AnnaNowak</span>
                <span class="thread-date">14 maja 2023, 09:15</span>
            </div>
            <div class="thread-excerpt">
                Jakie techniki stosujecie przy mockowaniu zależności w testach? Korzystacie z gotowych bibliotek, czy piszecie własne implementacje?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 19 odpowiedzi</span>
                <span><i>👁️</i> 310 wyświetleń</span>
                <span><i>👍</i> 13 polubień</span>
            </div>
        </li>

        <li class="forum-thread">
            <div class="thread-title">Jak wybrać framework frontendowy do nowego projektu?</div>
            <div class="thread-meta">
                <span class="thread-author">AnnaNowak</span>
                <span class="thread-date">14 maja 2023, 09:15</span>
            </div>
            <div class="thread-excerpt">
                Planuję nowy projekt i zastanawiam się, który framework frontendowy będzie najlepszy. Co sądzicie o wyborze między Reactem, Vue a Svelte?
            </div>
            <div class="thread-stats">
                <span><i>💬</i> 26 odpowiedzi</span>
                <span><i>👁️</i> 400 wyświetleń</span>
                <span><i>👍</i> 17 polubień</span>
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
        <p class="p">Created by Dominik C.</p>       
        </footer>
    </div>
</body>
</html>