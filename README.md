# Computer Store

**Computer Store** A Computer Store project developed for the second year of studies. Its an e-commerce platform built with Laravel, allowing users to browse and purchase computer components,
 while providing an admin panel for managing products, users, and orders.

---

## Requirements

To run the project locally, you need the following programs and versions:

- **XAMPP**: 8.2.12  
  [Download XAMPP](https://www.apachefriends.org/index.html)

- **Composer**: 2.8.3  
  [Download Composer](https://getcomposer.org/)

- **Node.js**: 22.12.0  
  [Download Node.js](https://nodejs.org/)

- **NPM**: 10.9.0 (installed with Node.js)

---

## Installation and Setup

Follow these steps to install and run the project locally:

### 1. Clone the Repository
```bash
git clone https://github.com/PrzemekTypa/SklepKomputerowy.git
cd SklepKomputerowy
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Frontend Dependencies
```bash
npm install
```

### 4. Utworzenie pliku `.env`
Copy the example `.env` file:
```bash
cp .env.example .env
```

Then, adjust the settings in the .env file:
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommercepro
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate the Application Key
```bash
php artisan key:generate
```

### 6. Run Database Migrations
```bash
php artisan migrate
```

### 7. Build Frontend Assets

Dla For development environment:
```bash
npm run dev
```

### 8. Start the Application Server
```bash
php artisan serve
```

The application will be available at:
```
http://127.0.0.1:8000
```
