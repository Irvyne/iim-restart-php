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
function createArticle(PDO $pdo, $title, $content, $picture)
{
    $sql = 'INSERT INTO article (title, content, picture) VALUES (:title, :content, :picture)';
    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        'title'   => $title,
        'content' => $content,
        'picture' => $picture,
    ]);
}

// READ
function getArticles(PDO $pdo)
{
    $sql = 'SELECT * FROM article';

    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function getArticle(PDO $pdo, $id)
{
    $sql = 'SELECT * FROM article WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'id' => $id,
    ]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// UPDATE
function updateArticle(PDO $pdo, $id, $title, $content, $picture)
{
    $sql = 'UPDATE article SET title = :title, content = :content, picture = :picture WHERE id = :id';
    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        'id'      => $id,
        'title'   => $title,
        'content' => $content,
        'picture' => $picture,
    ]);
}

// DELETE
function deleteArticle(PDO $pdo, $id)
{
    $sql = 'DELETE FROM article WHERE id = :id';
    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        'id' => $id,
    ]);
}
