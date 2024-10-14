# COMANDOS.


## Para crear un poryecto en laravel
composer create-project --prefer-dist laravel/laravel Nombre-proyecto

## correr laravel
php artisan serve
## correr migraciones
php artisan migrate

## Crear modelo con migracion contralador resource seeder y factpry
php artisan make:model Agenda -mcrsf

## borrar todo correr migraciones y seeder
php artisan migrate:fresh --seed

## ver las rutas de la aplicacion
php artisan route:list 


## para clonar
composer install
## modificar el archivo