<?php

require "config.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: admin_user.php');
    die();
}

$user = getUser($pdo, $id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $oldPassword = $_POST['oldPassword'] ?? null;
    $newPassword = $_POST['newPassword'] ?? null;

    if (!$oldPassword || !$newPassword) {
        header('Location: admin_user_edit.php?id='.$id);
    }

    $isPasswordCorrect = login($pdo, $user['email'], $oldPassword);

    if ($isPasswordCorrect) {
        updateUser($pdo, $id, $newPassword);

        header('Location: admin_user.php');
    } else {
        $error = true;
    }
}

echo $twig->render('admin_user_edit.html.twig', [
    'isConnected' => isset($_SESSION['isConnected']),
    'isError'     => isset($error),
    'user'        => $user,
]);
