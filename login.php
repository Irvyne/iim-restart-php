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

/**
 * loginUser()
 *   FAILURE =>   false
 *   SUCCESS =>   ['id' => 1, 'username' => 'admin', ...]
 */

if (!empty($username) && !empty($password)) {
    $user = loginUser($pdo, $username, $password);

    if ($user !== false) {
        echo 'Connected!!!';

        $_SESSION['isConnected'] = true;
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];

        header('Location: admin.php');
    } else {
        echo 'Bad credentials!!!';
    }
} else {
    echo "Vous devez remplir tous les champs!";
}
