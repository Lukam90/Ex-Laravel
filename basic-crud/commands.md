# Serve

php artisan serve

npm run watch

# NPM

npm install && npm run dev

# Migrations

php artisan migrate

php artisan migrate:fresh --seed

php artisan make:migration CreateCompaniesTables

# Models

php artisan make:model Company

# Controllers

php artisan make:controller HomeController

php artisan make:controller CompanyController

# Factories

php artisan make:factory CompanyFactory

# Seeders

php artisan make:seeder UserSeeder

# Routes

php artisan route:list

# Auth (Scaffolding)

composer require laravel/ui

php artisan ui bootstrap --auth

# Middlewares

php artisan make:middleware UserAccess