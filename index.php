<?php

require "config.php";

//Recup 12 article dans une variable $articles

echo $twig->render('index.html.twig', [
    'isConnected' => isset($_SESSION['isConnected']),
]);
