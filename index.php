<?php

require 'config.php';

/************
 * TEMPLATE *
 ************/

echo $twig->render('index.html.twig', [
    'title' => 'homepage!',
    'isConnected' => isset($_SESSION['isConnected']),
]);
