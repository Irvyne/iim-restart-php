<?php

/*
// Solution 1
if (isset($_POST['username'])) {
    $username = $_POST['username'];
} else {
    $username = null;
}

// Solution 2
$username = isset($_POST['username']) ? $_POST['username'] : null;

// Solution 3
$username = $_POST['username'] ?? null;
*/

require 'config.php';

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

if (!empty($username) && !empty($password)) {
    if (loginUser($pdo, $username, $password) === true) {
        echo 'Connected!!!';

        $_SESSION['isConnected'] = true;

        header('Location: admin.php');
    } else {
        echo 'Bad credentials!!!';
    }
} else {
    echo "Vous devez remplir tous les champs!";
}
