<?php

require 'config.php';

/************
 * TEMPLATE *
 ************/

echo $twig->render('admin_articles.html.twig', [
    'title'       => 'Admin - Articles',
    'isConnected' => isset($_SESSION['isConnected']),
    'articles'    => getArticles($pdo),
]);
