<?php

require __DIR__ .'/../vendor/autoload.php';

use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;


$dotenv = Dotenv::create(__DIR__ .'/../');
$dotenv->load();

$capsule = new Capsule();
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'laravel_db',
    'username' => $_ENV['DB_USERNAME'],
    'password' => $_ENV['DB_PASSWORD'],
    'charset' => 'utf8'
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
