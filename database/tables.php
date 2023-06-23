<?php

use BookList\Domain\Infraestructure\Persistence\PdoConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = PdoConnectionCreator::creatorConnection();

//query of tables
$sqlTableUsers = "CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY,
    name TEXT,
    email TEXT,
    birth_date DATE,
    username TEXT,
    password TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";

$sqlTableBooks = "CREATE TABLE IF NOT EXISTS books (
  id INTEGER PRIMARY KEY,
  name TEXT,
  theme TEXT,
  price REAL,
  author TEXT,
  user_id INTEGER,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY(user_id) REFERENCES users(id)
);";


//created tables in database
try {
    $books = $pdo->prepare($sqlTableBooks);
    $users = $pdo->prepare($sqlTableUsers);
    var_dump($books->execute());
    var_dump($users->execute());
} catch (\RuntimeException $e) {
    echo $e->getMessage();
}
