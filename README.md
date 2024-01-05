# CRUD APIs with Sanctum Authentication

Welcome to the CRUD APIs project with Sanctum authentication. This guide will help you set up a basic CRUD (Create, Read, Update, Delete) API using Laravel 10V along with the Sanctum package for API authentication.

## Prerequisites
- Xampp
- Composer

## Steps
1. Clone the repository:
```bash
git clone https://github.com/AElgamal5/Laravel-RESTful-APIs.git
```
2. Navigate to the project directory:
```bash
cd Laravel-RESTful-APIs
```
3. Install dependencies:
```bash
composer install
```
4. Copy the .env.example file to create a new .env file:
```bash
cp .env.example .env
```
5. Configure your database settings in the .env file:
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
6. Migrate the database:
```bash
php artisan migrate
```
7. Start the Laravel development server:
```bash
php artisan serve
```
