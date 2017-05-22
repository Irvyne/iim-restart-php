<?php

require "vendor/autoload.php";

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
} catch (Throwable $t) {
    echo "An error occurred, code ".$t->getCode()."!";
}
