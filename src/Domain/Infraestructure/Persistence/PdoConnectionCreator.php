<?php

namespace BookList\Domain\Infraestructure\Persistence;
use PDO;
class PdoConnectionCreator
{
    public static function creatorConnection(): PDO
    {
        try {
            $dbPath = __DIR__ . '/../../../../database/database.sqlite';

            $connection = new PDO("sqlite:{$dbPath}");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (\RuntimeException $e) {
            echo $e->getMessage();
        }

        return $connection;
    }

}