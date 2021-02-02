<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## How to install
1.Type command see below
```
composer install
```
2.Create .env configulation file in command line.  
```
cp .env.example .env
```
 > Or in windows use command
```
copy .env.example .env
```
3.Generate key in this project.
```
php artisan key:generate
```
4.Modify .env file to correspond value.
```
APP_NAME=
APP_URL=

DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

```
5.Modify config/services.php  to correspond value.
Please create facebook app in https://developers.facebook.com and copy value of client_id and client_secret to push them below.
```
    'facebook' => [
        'client_id' => '',
        'client_secret' => '',
        'redirect' => 'http://localhost:8000/callback',
    ],
```


6.Provision database. Use command below.
```
php artisan migrate
```
7.Run Run Run
```
php artisan serve
```
### Test URL
http://localhost:8000/login

