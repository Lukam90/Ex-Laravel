# Creation

laravel new inertiapp

npm run watch

# Serve

php artisan serve

# Dependencies

## Composer

composer require inertiajs/inertia-laravel

## NPM

npx mix

npm install

npm install @inertiajs/inertia @inertiajs/inertia-vue3<br>
npm install vue@next<br>
npm install @inertiajs/progress

npm install -D @vue/compiler-sfc

# Middlewares

php artisan inertia:middleware

# Migrations

php artisan migrate<br>
php artisan migrate:fresh --seed

# Seeders

php artisan db:seed

# Controllers

php artisan make:controller LoginController

# Policies

php artisan make:policy UserPolicy --model=User