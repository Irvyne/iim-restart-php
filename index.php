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

$sql = 'SELECT id, username, email FROM user WHERE username="admin" OR password="blabla"';

dump($pdo->query($sql)->fetch(PDO::FETCH_ASSOC));


// Trouver un moyen de faire un dump($user);

/************
 * TEMPLATE *
 ************/

require 'template/header.html';

require 'template/index.html';

require 'template/footer.html';
