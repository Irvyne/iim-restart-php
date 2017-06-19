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
    // Renvoyer un boolean, true si l'utilisateur est crée, false dans l'autre cas.
    // password_hash("password", CRYPT_BLOWFISH);
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

}

/**
 * Récupère un user via son ID.
 *
 * @param PDO $pdo
 * @param int $id
 *
 * @return array
 */
function getUser(PDO $pdo, $id)
{

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

}


// Uniquement pour l'utilsateur

/**
 * @param PDO    $pdo
 * @param string $username
 * @param string $password
 *
 * @return array|false false si l'utilisateur n'existe pas ou le mot de passe est invalide, array avec les données
 *                     utilisateur s'il existe
 */
function login(PDO $pdo, $username, $password)
{

}