<?php

namespace BookList\Domain\Model\Repository;
use BookList\Domain\Model\Book;
interface BookRepository
{
    public function allBooks(): array;
    public function insert(Book $book): bool;
    public function delete(int $bookId): bool;
    public function update(Book $book): bool;
//    public function booksByUser(Book): array;
}