# Laravel Firebase
Laravel ServiceProvider for [eelkevdbos/firebase-php](https://github.com/eelkevdbos/firebase-php) Library

## Instalation

# Laravel 5

Composer is the recommended way to install this package. Run this command:

```bash
composer require elsangedy/laravel-firebase
```

Once composer has installed the package add this line of code to the `providers` array located in your `config/app.php` file:

```php
LaravelFirebase\LaravelFirebaseServiceProvider::class
```

To publish this package configuration run:

```bash
php artisan vendor:publish
```

Edit the `config/firebase.php` file, enter your `url` and your `secret`.

## Basic usage

```php
<?php

namespace App\Http\Controllers;

use Firebase\Firebase;

class FirebaseController extends Controller
{
  public function index(Firebase $firebase)
  {
    $endpoint = '/exaple';

    $data = $firebase->get($endpoint);

    return $data;
  }
}
````
