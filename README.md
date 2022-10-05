<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# larastore

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Getting started

Clone the repository:

```bash
  git clone https://github.com/dj0nny/larastore.git
```

Check if PHP and [Composer](https://getcomposer.org/) is installed:

```bash
  php -v
  composer -v
```

Install the dependencies:

```bash
  composer install
```

Rename the `.env.example` to `.env` and replace with your database configuration.
Then run:

```bash
  php artisan serve
```

## Migration and seeding

For running the migrations:

```bash
  php artisan migrate
```

You can also migrate and seed the database with dummy data using:

```bash
  php artisan migrate --seed
```

For dropping all the tables and run the migrations and the seeder:

```bash
  php artisan migrate:refresh --seed
```

## Authors

-   [@dj0nny](https://github.com/dj0nny/)
