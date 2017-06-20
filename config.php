<?php

require "vendor/autoload.php";
require "function/user.fn.php";

$credentials = require "credentials.php";
$loader = new Twig_Loader_Filesystem(__DIR__.'/template');
$twig = new Twig_Environment($loader, [
    //'cache' => __DIR__.'/var/cache',
]);

try {
    $pdo = new PDO(
        'mysql:host='.$credentials['mysql']['host'].';dbname='.$credentials['mysql']['dbname'],
        $credentials['mysql']['username'],
        $credentials['mysql']['password']
    );
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Throwable $t) {
    echo "An error occurred, code ".$t->getCode()."!";
}

session_start();
