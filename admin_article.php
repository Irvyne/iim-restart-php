<?php

require "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image = $_FILES['image'] ?? null;

    if (!$image) {
        header('Location: admin_article.php');
        die();
    }

    // Si on n'a pas d'erreurs
    if ($image['error'] === 0) {
        $random = uniqid(mt_rand(), true);
        $extension = explode('.', $image['name']);
        $filename = $random.'.'.$extension[ sizeof($extension) - 1 ];

        move_uploaded_file($image['tmp_name'], __DIR__.'/upload/'.$filename);
    }
}

echo $twig->render('admin_article_list.html.twig', [
    'isConnected' => isset($_SESSION['isConnected']),
]);
