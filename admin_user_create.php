<?php

require "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    if (!$username || !$email || !$password) {
        $error = true;
    } else {
        $isCreated = createUser($pdo, $username, $email, $password);

        if (!$isCreated) {
            $error = true;
        } else {
            header('Location: admin_user.php');
            die();
        }
    }
}

echo $twig->render('admin_user_create.html.twig', [
    'isConnected' => isset($_SESSION['isConnected']),
    'isError'     => isset($error),
]);
