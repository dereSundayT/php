<?php

$host = 'localhost';
$user = 'root';
$password = 'Admin123';
$dbname = 'php_dev';
// // Set DSN
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
//echo $dsn;
// // Create a PDO Instance
$pdo = new PDO($dsn, $user, $password);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
//it helps to pass the LIMIT value as a variable
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
/*
// # PDO Query
$stmt = $pdo->query('SELECT * FROM posts');

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['title'] . '<br/>';
}

while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    echo $row->title . '<br/>';
}

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
while ($row = $stmt->fetch()) {
    echo $row->title . '<br/>';
}

*/


// ─── PREPARE STATEMENT ──────────────────────────────────────────────────────────
//  prepare and execute

// UNSAFE
// $sql = "SELECT * FROM posts WHERE author = '$author'";

// FETCH MULTIPLE POSTS

// USer Input
$author = 'Dere';
$is_published = true;
$id = 1;
/*
    // Positional Params
    $sql = 'SELECT * FROM posts WHERE author =  ? ';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$author]);
    $posts = $stmt->fetchAll();
    // Named Params
    $sql = 'SELECT * FROM posts WHERE author =  :author ';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['author' => $author]);
    $posts = $stmt->fetchAll();
    // multiple 
    $sql = 'SELECT * FROM posts WHERE author =  :author && is_published : is_published ';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['author' => $author, 'is_published' => $is_published]);
    $posts = $stmt->fetchAll();
    //var_dump($posts);
    foreach ($posts as $post) {
        echo $post->title;
    }

    //
    // ─── FETCH SINGLE POST ──────────────────────────────────────────────────────────
    //
    $sql = 'SELECT * FROM posts WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $post = $stmt->fetch();
    echo $post->body;
    //
// ─── GET ROW COUNT ──────────────────────────────────────────────────────────────
//
$stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ? ');
$stmt->execute([$author]);
$postCount = $stmt->rowCount();
echo $postCount;

//
// ─── INSERT DATA ────────────────────────────────────────────────────────────────
//
$title = 'Post Five';
$body = 'This is Post Five';
$author = 'Kelvin';

$sql = "INSERT INTO posts(title,body,author) VALUES(:title,:body,:author)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
echo 'Post Added';
//
// ─── UPDATED DATA ────────────────────────────────────────────────────────────────
//
$id = 1;
$body = 'This is the updated Post';
$sql = "UPDATE posts SET body = :body WHERE id =:id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['body' => $body, 'id' => $id]);
echo 'Post Updated';
//
// ─── DELETE DATA ────────────────────────────────────────────────────────────────
//
$id = 3;

$sql = "DELETE FROM posts WHERE id =:id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
echo 'Post Deleted';
*/
$search = "%post%";
$sql = "SELECT * FROM posts WHERE title LIKE ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$search]);
$posts = $stmt->fetchAll();

foreach ($posts as $post) {
    echo $post->title . "<br/>";
}