# Sklep Komputerowy

**Sklep Komputerowy** SklepKomputerowy to internetowa aplikacja sklepu komputerowego, umożliwiająca użytkownikom przeglądanie podzespołów komputerowych, \n
dodawanie produktów do koszyka, a także zakupu online. Aplikacja posiada pełną funkcjonalność panelu administracyjnego, umożliwiającego zarządzanie produktami, użytkownikami oraz zamówieniami.

---

## Wymagania

Aby uruchomić projekt lokalnie, potrzebujesz następujących programów i wersji:

- **XAMPP**: 8.2.12  
  [Pobierz XAMPP](https://www.apachefriends.org/index.html)

- **Composer**: 2.8.3  
  [Pobierz Composer](https://getcomposer.org/)

- **Node.js**: 22.12.0  
  [Pobierz Node.js](https://nodejs.org/)

- **NPM**: 10.9.0 (zainstalowane razem z Node.js)

---

## Instalacja i uruchomienie

Wykonaj poniższe kroki, aby zainstalować i uruchomić projekt lokalnie:

```bash
# 1. Klonowanie repozytorium
git clone https://github.com/Przem-T/SklepKomputerowy.git
cd SklepKomputerowy

# 2. Instalacja zależności PHP
composer install

# 3. Instalacja zależności frontendowych
npm install

# 4. Utworzenie pliku .env
cp .env.example .env

# Następnie dostosuj ustawienia w pliku .env:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=sklep_komputerowy
# DB_USERNAME=root
# DB_PASSWORD=

# 5. Wygenerowanie klucza aplikacji
php artisan key:generate

# 6. Migracje bazy danych
php artisan migrate

# 7. Budowanie zasobów frontendowych
npm run dev # (dla środowiska developerskiego)
# lub
npm run build # (dla środowiska produkcyjnego)

# 8. Uruchomienie serwera aplikacji
php artisan serve

# Aplikacja będzie dostępna pod adresem:
# http://127.0.0.1:8000
