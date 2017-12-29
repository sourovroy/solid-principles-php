<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

// S = Single Responsibility
// new App\SRP\Init;

// O = Open-Closed
// new App\OCP\Init;

// L = Liskov Substitution
// new App\LSP\Init;

// I = Interface Segregation
// new App\ISP\Init;

// D = Dependency Inversion
new App\DIP\Init;