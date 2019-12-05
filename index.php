<?php

use Cocur\Slugify\Slugify;
use Dotenv\Dotenv;

require_once 'vendor/autoload.php';

if (file_exists('.env')) {
  $dotenv = Dotenv::createImmutable(__DIR__);
  $dotenv->load();
}

$slugify = new Slugify();
$slug = $slugify->slugify('Hello World!');

echo "<pre>"; print_r($slug); echo "</pre>";