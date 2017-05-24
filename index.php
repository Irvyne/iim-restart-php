<?php

require 'config.php';

/*
 * CRUD
 *
 * Create => INSERT
 * Read   => SELECT
 * Update => UPDATE
 * Delete => DELETE
 */

dump(
    getUsers($pdo)
);

//createUser($pdo, 'admin2'.mt_rand(), 'efzefezf@ezfez.fr'.mt_rand(), 'admin2');


$sql = 'SELECT id, email, username FROM user WHERE username="admin" AND password="blabla"';

//dump($pdo->query($sql)->fetch(PDO::FETCH_ASSOC));


// Trouver un moyen de faire un dump($user);

/************
 * TEMPLATE *
 ************/

require 'template/header.html';

require 'template/index.html';

require 'template/footer.html';
