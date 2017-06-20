<?php

/*
 * CRUD
 *
 * Create => INSERT INTO
 * Read   => SELECT FROM
 * Update => UPDATE
 * Delete => DELETE FROM
 */

/**
 * Crée un utilisateur.
 *
 * @param PDO    $pdo
 * @param string $username
 * @param string $email
 * @param string $password
 *
 * @return bool
 */
function createUser(PDO $pdo, $username, $email, $password)
{
    $sql = "INSERT INTO user (username, email, password) VALUES (:username, :email, :password)";
    $pdoStatement = $pdo->prepare($sql);

    return $pdoStatement->execute([
        'username' => $username,
        'email'    => $email,
        'password' => password_hash($password, CRYPT_BLOWFISH),
    ]);
}

/**
 * Récupère tous les utilisateurs.
 *
 * @param PDO $pdo
 *
 * @return array
 */
function getUsers(PDO $pdo)
{
    $sql = "SELECT id, username, email FROM user";

    return $pdo->query($sql)->fetchAll();
}

/**
 * Récupère un user via son ID.
 *
 * @param PDO $pdo
 * @param int $id
 *
 * @return array|bool false if not user is found.
 */
function getUser(PDO $pdo, $id)
{
    $sql = "SELECT id, username, email FROM user WHERE id = :id";
    $pdoStatement = $pdo->prepare($sql);
    $pdoStatement->execute([
        'id' => $id,
    ]);

    return $pdoStatement->fetch();
}

/**
 * Met à jour le mot de passe d'un utilisateur.
 *
 * @param PDO    $pdo
 * @param int    $id
 * @param string $password
 *
 * @return bool
 */
function updateUser(PDO $pdo, $id, $password)
{
    $sql = "UPDATE user SET password = :password WHERE id = :id";
    $pdoStatement = $pdo->prepare($sql);

    return $pdoStatement->execute([
        'password' => password_hash($password, CRYPT_BLOWFISH),
        'id'       => $id,
    ]);
    //$pdoStatement->columnCount()
}

/**
 * Supprime un utilisateur
 *
 * @param PDO $pdo
 * @param int $id
 *
 * @return bool
 */
function deleteUser(PDO $pdo, $id)
{
    $sql = "DELETE FROM user WHERE id = :id";
    $pdoStatement = $pdo->prepare($sql);

    return $pdoStatement->execute([
        'id' => $id,
    ]);
    //$pdoStatement->columnCount()
}


// Uniquement pour l'utilsateur

/**
 * @param PDO    $pdo
 * @param string $email
 * @param string $password
 *
 * @return array|false false si l'utilisateur n'existe pas ou le mot de passe est invalide, array avec les données
 *                     utilisateur s'il existe
 */
function login(PDO $pdo, $email, $password)
{
    $sql = "SELECT * FROM user WHERE email = :email";
    $pdoStatement = $pdo->prepare($sql);
    $pdoStatement->execute([
        'email' => $email,
    ]);

    $user = $pdoStatement->fetch();

    if (!$user)
        return false;

    if (!password_verify($password, $user['password']))
        return false;

    return $user;

    //return password_verify($password, $user['password']) ? $user : false;
}