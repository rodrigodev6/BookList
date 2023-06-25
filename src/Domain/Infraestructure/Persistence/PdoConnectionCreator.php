<?php

namespace BookList\Domain\Infraestructure\Persistence;
use PDO;
class PdoConnectionCreator
{
    public static function creatorConnection(): PDO
    {
        $database = "mysql";
        $host = "127.0.0.1";
        $dbname = "booklistapp";
        $username = "root";
        $password = '';
        $dsn = "$database:host={$host};dbname={$dbname}";

        try {
            $connection = new PDO($dsn,$username,$password);

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (\RuntimeException $e) {
            echo $e->getMessage();
        }

        return $connection;
    }

}