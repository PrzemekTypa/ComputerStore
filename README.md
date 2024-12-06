# SklepKomputerowy

SklepKomputerowy to internetowa aplikacja sklepu komputerowego, umożliwiająca użytkownikom przeglądanie podzespołów komputerowych, dodawanie produktów do koszyka, a także zakupu online. Aplikacja posiada pełną funkcjonalność panelu administracyjnego, umożliwiającego zarządzanie produktami, użytkownikami oraz zamówieniami.
Technologie

Projekt wykorzystuje następujące technologie:

    PHP (Laravel) – backend, logika aplikacji
    MySQL – baza danych
    JavaScript (React) – interaktywne elementy frontendowe
    Bootstrap – responsywny design
    CSS – style
    Laravel – framework PHP, w którym aplikacja jest zbudowana
    Composer – zarządzanie zależnościami PHP
    npm – zarządzanie zależnościami front-endowymi

# Instalacja

Aby uruchomić projekt na swoim komputerze, wykonaj poniższe kroki:

    Klonowanie repozytorium:

git clone https://github.com/Przem-T/SklepKomputerowy.git
cd SklepKomputerowy

Instalacja zależności PHP: Zainstaluj zależności backendowe za pomocą Composer:

composer install

Instalacja zależności front-endowych: Zainstaluj zależności JavaScriptowe przy pomocy npm:

npm install

# Ustawienia środowiskowe: 

Skopiuj plik .env.example do .env:

cp .env.example .env

Skonfiguruj plik .env w zależności od swojego środowiska (np. konfiguracja bazy danych).

Generowanie klucza aplikacji Laravel:

php artisan key:generate

# Migracje bazy danych: Wykonaj migracje bazy danych:

php artisan migrate

Uruchomienie serwera lokalnego: Uruchom serwer lokalny aplikacji:

    php artisan serve

    Aplikacja będzie dostępna pod adresem: http://localhost:8000.

# Funkcje

Aplikacja oferuje szereg funkcji, w tym:

    Przeglądanie produktów – użytkownicy mogą przeglądać produkty w sklepie, filtrować je według kategorii i ceny.
    Dodawanie produktów do koszyka – użytkownicy mogą dodawać produkty do koszyka.
    Rejestracja i logowanie użytkowników – użytkownicy mogą rejestrować się i logować, aby składać zamówienia.
    Zamówienia – użytkownicy mogą finalizować zakupy.
    Panel administracyjny – administratorzy mogą zarządzać produktami, kategoriami oraz użytkownikami sklepu.

# Wymagania systemowe

    PHP 7.4 lub nowszy
    Composer – narzędzie do zarządzania zależnościami PHP
    MySQL – baza danych
    Node.js i npm – do zarządzania zależnościami frontendowymi (React, Bootstrap, itp.)

# Licencja

Projekt jest dostępny na licencji MIT. Szczegóły można znaleźć w pliku LICENSE.