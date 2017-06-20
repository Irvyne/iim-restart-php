<?php

require 'config.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (!$email || !$password) {
    header('Location: index.php');
    die();
}

$user = login($pdo, $email, $password);

if ($user) {
    $_SESSION['isConnected'] = true;
    $_SESSION['id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
}

header('Location: index.php');
