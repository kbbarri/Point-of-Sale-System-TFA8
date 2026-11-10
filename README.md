# Laravel POS System – TFA8

A Point of Sale (POS) application developed using Laravel 12, continuing the previous TFA5–TFA7 activities.

## Features

- Home and About pages
- Customer account CRUD operations
- User account CRUD operations
- Laravel resource controllers and resource routes
- Laravel Breeze login and registration
- Authentication middleware protecting account management routes
- Eloquent models and SQLite database
- User avatar upload and image resizing

## Technologies Used

- PHP
- Laravel 12
- SQLite
- Laravel Breeze
- Eloquent ORM
- Blade Templates
- Node.js and Vite

## Routes

| Route | Description |
|---|---|
| `/` | Home |
| `/about` | About |
| `/login` | Login |
| `/register` | Registration |
| `/dashboard` | Authenticated dashboard |
| `/customers` | Protected customer management |
| `/users` | Protected user management |

## Authentication

The application uses Laravel Breeze for registration, login, and logout.

Authentication accounts are stored separately from POS user records.

Customer and user management routes use Laravel's `auth` middleware. Unauthenticated visitors are redirected to the login page.

## Setup Instructions

1. Install PHP, Composer, and Node.js.
2. Clone the repository.
3. Run `composer install`.
4. Run `npm install`.
5. Copy `.env.example` to `.env`.
6. Set `DB_CONNECTION=sqlite` in `.env`.
7. Create an empty `database/database.sqlite` file.
8. Run `php artisan key:generate`.
9. Run `php artisan migrate --seed`.
10. Run `php artisan storage:link`.
11. Run `npm run build`.
12. Run `php artisan serve`.
13. Visit `http://127.0.0.1:8000`.

## Screenshots

Screenshots demonstrating resource routes, login, registration, protected pages, and authentication middleware are included in the `screenshots/` folder.

## Notes

This application is intended for educational purposes and demonstrates Laravel resource routing and authentication.
