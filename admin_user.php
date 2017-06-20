<?php

require "config.php";

echo $twig->render('admin_user_list.html.twig', [
    'isConnected' => isset($_SESSION['isConnected']),
    'users'       => getUsers($pdo),
]);
