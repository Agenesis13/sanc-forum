<?php return array (
  'debug' => false,
  'database' => [
    'driver' => 'mysql',
    'host' => env('DB_HOST', 'gtizpe105piw2gfq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'),
    'database' => env('DB_DATABASE', 'hkb96jflbhef4sz0'),
    'username' => env('DB_USERNAME', 't7sk5t4dhy48keta'),
    'password' => env('DB_PASSWORD', 'j9msnpn7o1yvnh5q'),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => true,
],
  'url' => 'http://localhost/flarum/public',
  'paths' => 
  array (
    'api' => 'api',
    'admin' => 'admin',
  ),
  'headers' => 
  array (
    'poweredByHeader' => true,
    'referrerPolicy' => 'same-origin',
  ),
);