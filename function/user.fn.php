<?php

/**
 * CRUD
 *
 * Create => INSERT
 * Read   => SELECT
 * Update => UPDATE
 * Delete => DELETE
 */


// CREATE
function createUser(PDO $pdo, $username, $email, $password)
{
    $sql = 'INSERT INTO user (username, email, password) VALUES (:username, :email, :password)';
    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        'username' => $username,
        'email'    => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
    ]);
}

// READ
function getUsers(PDO $pdo)
{
    $sql = 'SELECT id, username, email FROM user';

    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function getUser(PDO $pdo, $id)
{
    $sql = 'SELECT id, username, email FROM user WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'id' => $id,
    ]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function loginUser(PDO $pdo, $username, $password)
{
    $sql = 'SELECT * FROM user WHERE username = :username';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'username' => $username,
    ]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user === false) {
        return false;
    }

    return password_verify($password, $user['password']) ? $user : false;
}

// UPDATE
function updateUser(PDO $pdo, $id, $email = null, $password = null)
{
    $sql = 'UPDATE user SET email = :email, password = :password WHERE id = :id';
    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        'id'       => $id,
        'email'    => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
    ]);
}

// DELETE
function deleteUser(PDO $pdo, $id)
{
    $sql = 'DELETE FROM user WHERE id = :id';
    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        'id' => $id,
    ]);
}
