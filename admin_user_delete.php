<?php

require "config.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: admin_user.php');
    die();
}

deleteUser($pdo, $id);

header('Location: admin_user.php');
