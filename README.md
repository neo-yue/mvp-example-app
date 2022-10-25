## MVP Example App

MVP Example App is a Laravel application which imports invoice records into a database through the command line 

## Requisites

- PHP 8+
- composer
- database such as mysql

## Installation

- git clone git@github.com:fleetnova/mvp-example-app.git
- cd mvp-example-app
- composer install
- set the database connection in .env file
- php artisan migrate

## Importing Invoices

- php artisan import:popeyes
- php artisan import:wonder