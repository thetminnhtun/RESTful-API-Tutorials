## Running the API

It's very simple to get the API up and running. First, create the database (and database
user if necessary) and add them to the `.env` file or run command `cp .env.example .env` (only Linux and Mac)

```
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

Then install, migrate, seed, all that jazz:

1. `composer install`
2. `php artisan key:generate`
3.  add `Schema::defaultStringLength(191)` at AppServiceProvider <br>
	(or)<br>
	change at `config/database.php` file <br>
	`'charset' => 'utf8mb4'` to `'charset' => 'utf8'` and <br>
	`'collation' => 'utf8mb4_unicode_ci'` to `'collation' => 'utf8_general_ci'`
4. `php artisan migrate`
5. `php artisan db:seed`
6. `php artisan serve`

The API will be running on `localhost:8000`.

This tutorial from [https://www.toptal.com/laravel/restful-laravel-api-tutorial](https://www.toptal.com/laravel/restful-laravel-api-tutorial)