# Projet Quartier V2

## Tech

- PHP 5.6 >=  
- Laravel 5.3
- MySQL
- jQuery 3
- Knacss


## Install

`git clone https://github.com/Machu96/projet-quartier-v2.git`

`composer update` => installe les dépendances de laravel

dans phpMyAdmin créer une base quartier

lancer un `php artisan migrate` pour créer les tables

pour générer des produits vendu par les commerçants `php artisan db:seed` 


## Dev front

`localhost/projet-quartier-v2/public` adresse par defaut de la page home 

Dans le dossier `resources/views` le fichier défault.blade.php est le template principal.


## Respect normes Laravel

- Les templates ont l'extension .blade.php
- Doc [https://laravel.com/docs/5.3/blade](documentation blade)
