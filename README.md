<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

Movie Story Board Web App

## Installation
1. Clone repostory 
-- gitclone https://github.com/Loydtafireyi/MovieStoryBoard.git
2. cd to the cloned directory and run
-- composer update
3. Go to https://www.themoviedb.org and register then go to https://www.themoviedb.org/settings/api to get your api token
-- paste the api token in the .env on MOVIE_DB_TOKEN=
4. Google login setup
-- go to https://developers.google.com/identity/sign-in/web/sign-in then Configure Project. Copy Client ID and Key to the .env
5. Create a database
-- enter db info in the .env file
6. Seed Database
-- php artisan db:seed
7. Start app
-- php artisan serve

Admin email admin@admin.com
Email admin123
Username LoydTafireyi

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

