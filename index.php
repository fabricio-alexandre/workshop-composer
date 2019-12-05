<?php

use Dotenv\Dotenv;

require_once 'vendor/autoload.php';

if (file_exists('.env')) {
  $dotenv = Dotenv::createImmutable(__DIR__);
  $dotenv->load();
}

echo "<pre>"; print_r($_ENV); echo "</pre>";