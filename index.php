<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

// S = Single Responsibility
// new App\SRP\Init;

// O = Open-close
new App\OCP\Init;