# Sklep Komputerowy

**Sklep Komputerowy** to internetowa aplikacja sklepu komputerowego, umożliwiająca użytkownikom przeglądanie podzespołów komputerowych,  
dodawanie produktów do koszyka, a także zakupy online. Aplikacja posiada pełną funkcjonalność panelu administracyjnego, umożliwiającego zarządzanie produktami, użytkownikami oraz zamówieniami.

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

### 1. Klonowanie repozytorium
```bash
git clone https://github.com/Przem-T/SklepKomputerowy.git
cd SklepKomputerowy
```

### 2. Instalacja zależności PHP
```bash
composer install
```

### 3. Instalacja zależności frontendowych
```bash
npm install
```

### 4. Utworzenie pliku `.env`
Skopiuj przykładowy plik `.env`:
```bash
cp .env.example .env
```

Następnie dostosuj ustawienia w pliku `.env`:
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sklep_komputerowy
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Wygenerowanie klucza aplikacji
```bash
php artisan key:generate
```

### 6. Migracje bazy danych
```bash
php artisan migrate
```

### 7. Budowanie zasobów frontendowych

Dla środowiska developerskiego:
```bash
npm run dev
```

Lub dla środowiska produkcyjnego:
```bash
npm run build
```

### 8. Uruchomienie serwera aplikacji
```bash
php artisan serve
```

Aplikacja będzie dostępna pod adresem:
```
http://127.0.0.1:8000
```
