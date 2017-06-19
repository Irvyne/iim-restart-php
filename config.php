<?php

require 'vendor/autoload.php';
require 'function/user.fn.php';
require 'function/article.fn.php';

$pdo = new PDO('mysql:host=localhost;dbname=php_rick_and_morty', 'root', 'toor');
$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, [
    //'cache' => 'var/cache',
]);

session_start();
