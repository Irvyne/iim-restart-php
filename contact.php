<?php

require 'config.php';

/************
 * TEMPLATE *
 ************/

echo $twig->render('contact.html.twig', [
    'title' => 'contact me :D',
    'isConnected' => isset($_SESSION['isConnected']),
]);
