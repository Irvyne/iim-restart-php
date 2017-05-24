<?php
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
    $sql = 'SELECT * FROM user';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    dump($stmt->fetchAll(PDO::FETCH_ASSOC));
}

function getUser(PDO $pdo, $id)
{

}

function loginUser(PDO $pdo, $username, $password)
{

}

// UPDATE
function updateUser(PDO $pdo, $id, $email = null, $password = null)
{

}

// DELETE
function deleteUser(PDO $pdo, $id)
{

}