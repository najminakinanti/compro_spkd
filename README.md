# COMPRO SPKD

Company Profile PT Sistem Pelayanan Kesehatan dan Data (SPKD) berbasis web dengan Content Management System (CMS) untuk mengelola informasi dan konten website.

## Tech Stack

- PHP 8.3
- Laravel 13
- Filament
- PostgreSQL
- Tailwind CSS
- Vite
- Node.js
- NPM

## Features

### Authentication
- Login
- Remember Me
- Forgot Password
- Password Reset
- Role-based access

### CMS Management
- Account Management
- Role Management
- Company Profile
- Accreditations
- Compliances
- Ecosystem Statistics
- Homepage Hero
- Interoperability Standards
- News

## Requirements

- PHP >= 8.3
- Composer
- Node.js
- NPM
- PostgreSQL
- Git

## Installation

### 1. Clone Repository

    git clone <repository-url>
    cd compro_spkd

### 2. Install Dependencies

    composer install
    npm install

### 3. Environment Configuration

Windows PowerShell:

    Copy-Item .env.example .env

Generate application key:

    php artisan key:generate

### 4. Database Configuration

Atur konfigurasi PostgreSQL pada file `.env`:

    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=compro_spkd
    DB_USERNAME=postgres
    DB_PASSWORD=your_password

### 5. Migration & Seeder

    php artisan migrate --seed

Untuk membuat ulang seluruh database:

    php artisan migrate:fresh --seed

### 6. Build Assets

    npm run build

### 7. Run Application

    php artisan serve

Aplikasi:
http://127.0.0.1:8000

Admin panel:
http://127.0.0.1:8000/admin

## Development

Untuk development dengan automatic asset reload:

    php artisan serve
    npm run dev

Jika hanya ingin menjalankan aplikasi tanpa Vite development server:

    npm run build
    php artisan serve

## License

This project is developed for PT Sistem Pelayanan Kesehatan dan Data (SPKD).
