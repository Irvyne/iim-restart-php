<?php

require 'config.php';

/************
 * TEMPLATE *
 ************/

echo $twig->render('admin.html.twig', [
    'title'       => 'Administration ;-)',
    'isConnected' => isset($_SESSION['isConnected']),
]);
