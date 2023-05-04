

### How To Open :



First instal composer.json dependencies by running in terminal

```bach 
composer update
```
second instal package.json dependencies by running in terminal
```bach 
npm install
```

Create env file with your own database configration

-Windows

```bach 
copy .env.example .env
```
Linux/Mac

```bach 
cp .env.example .env
```

Then you need To generate New Key By Running 


```bach 
php artisan key:generate
```

then you need to migrate to database ny running

```bach 
php artisan migrate
```

then run
```bach 
php artisan optimize
```

to start server on localhost:8000
```bach 
php artisan serve
```
