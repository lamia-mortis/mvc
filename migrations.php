<?php

use App\Core\Application,
    App\Core\Router,
    App\Controllers\SiteController,
    App\Controllers\AuthController;

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); // путь к .env
$dotenv->load();

$config = [
  'db' => [
    'dsn' => $_ENV['DB_DSN'],
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD'],
  ],
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();