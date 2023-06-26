<?php

namespace BookList\Domain\Infraestructure\Repository;

use BookList\Domain\Model\Book;
use BookList\Domain\Model\Repository\BookRepository;
use PDO;

class PdoBookRepository implements BookRepository
{
    private PDO $connection;

    public function __construct(PDO $pdo)
    {
        $this->connection = $pdo;
    }

    public function allBooks(): array
    {
        $sqlSelect = "SELECT * FROM books;";
        $statement = $this->connection->query($sqlSelect);

        return $this->hydrateBookList($statement);
    }

    public function book(int $id): array
    {
        $query = "SELECT * FROM books WHERE id = :id;";
        $statement = $this->connection->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }


    public function hydrateBookList(\PDOStatement $statement): array
    {
        $bookDataList = $statement->fetchAll();
        $bookList = [];

        foreach ($bookDataList as $bookData) {
            $book = new Book(
                $bookData['id'],
                $bookData['name'],
                $bookData['theme'],
                $bookData['price'],
                $bookData['author'],
                $bookData['user_id']
            );

            $bookList[] = $book;
        }

        return $bookList;
    }

    public function insert(Book $book): bool
    {
        $sqlInsert = "INSERT INTO books (
                    name, theme, price, author, user_id) VALUES ( :name, :theme, :price, :author, :user_id)";
        $statement = $this->connection->prepare($sqlInsert);

        $statement->execute([
            ':name' => $book->name(),
            ':theme' => $book->theme(),
            ':price' => $book->price(),
            ':author' => $book->author(),
            ':user_id' => $book->userId()
        ]);
        $result = $statement->rowCount();

        if ($result) {
            $book->defineId($this->connection->lastInsertId());
        }

        return $result;
    }

    public function delete(int $bookId): bool
    {
        $sqlDelete = "DELETE FROM books WHERE id = :id;";
        $statement = $this->connection->prepare($sqlDelete);
        $statement->bindValue(':id', $bookId, PDO::PARAM_INT);
        $result = $statement->execute();

        if ($statement->rowCount() === 0) {
            throw new Exception("Book not foun in database");
        }

        return $result;
    }

    public function update(Book $book): bool
    {
        $sqlUpdate = "UPDATE books SET name = :name, theme = :theme, price = :price, author = :author WHERE id = :id;";
        $statement = $this->connection->prepare($sqlUpdate);

        $result = $statement->execute([
            ':id' => $book->id(),
            ':name' => $book->name(),
            ':theme' => $book->theme(),
            ':price' => $book->price(),
            ':author' => $book->author()
        ]);

        return $result;
    }
}