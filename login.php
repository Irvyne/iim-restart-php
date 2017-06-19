<?php

require 'config.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (!$email || !$password)
    header('Location: index.php');

/*
 * CRUD
 *
 * Create => INSERT INTO
 * Read   => SELECT FROM
 * Update => UPDATE
 * Delete => DELETE FROM
 */

// 1. Trouver l'utilisateur dans la BDD avec son email
$sql = "SELECT * FROM user WHERE email = :email";
$pdoStatement = $pdo->prepare($sql);
$pdoStatement->execute([
    'email' => $email,
]);

$user = $pdoStatement->fetch();

// Si l'email n'existe pas en BDD
if (!$user)
    header('Location: index.php');

// 2. Vérifier que les passwords match

if (!password_verify($password, $user['password']))
    header('Location: index.php');

$_SESSION['isConnected'] = true;
$_SESSION['id'] = $user['id'];
$_SESSION['email'] = $user['email'];

header('Location: index.php');
