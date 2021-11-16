This is a CRUD application developed in laravel.

# Installation

Clone the repository by 

```
git clone https://github.com/codesavyani/Laravel_CRUD.git
```

Move in the folder

```
cd Laravel_CRUD
```

Copy environment example file to make environment file

```
copy .env.example .env
```

Fill database details in .env file

Install composer dependencies

```
composer install
```

Generate app key

```
php artisan key:generate
```

Run migrations

```
php artisan migrate
```

Run the server

```
php artisan serve
```

Website is up and running