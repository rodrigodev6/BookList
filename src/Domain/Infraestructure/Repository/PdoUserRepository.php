<?php

namespace BookList\Domain\Infraestructure\Repository;

use PDO;
use BookList\Domain\Model\Repository\UserRepository;
use BookList\Domain\Model\User;

class PdoUserRepository implements UserRepository
{
    private PDO $connection;

    public function __construct(PDO $pdo)
    {
        $this->connection = $pdo;
    }

    public function allUsers(): array
    {
        $sqlSelect = "SELECT * FROM users;";
        $statement = $this->connection->query($sqlSelect);

        return $this->hydrateUserList($statement);
    }

    public function hydrateUserList(\PDOStatement $statement): array
    {
        $userDataList = $statement->fetchAll();
        $userList = [];

        foreach ($userDataList as $userData) {
            $user = new User(
              $userData['id'],
              $userData['name'],
              $userData['email'],
              new \DateTimeImmutable($userData['birth_date']),
              $userData['username'],
              $userData['password']
            );

            $userList[] = $user;
        }

        return $userList;
    }

    public function insert(User $user): bool
    {
        $sqlInsert = "INSERT INTO users (
                    name, email, birth_date, username, password) VALUES (
                    :name, :email, :birth_date, :username, :password)";
        $statement = $this->connection->prepare($sqlInsert);

        $result = $statement->execute([
            ':name' => $user->name(),
            ':email' => $user->email(),
            ':birth_date' => $user->birthDate()->format('Y-m-d'),
            ':username' => $user->username(),
            ':password' => $user->password()
        ]);

        if ($result) {
            $user->defineId($this->connection->lastInsertId());
        }

        echo "Inserido com sucesso " . PHP_EOL;

        return $result;
    }

    public function delete(int $userId): bool
    {
        $sqlDelete = "DELETE FROM users WHERE id = :id;";
        $statement = $this->connection->prepare($sqlDelete);
        $statement->bindValue(':id', $userId, PDO::PARAM_INT);
        $result = $statement->execute();

        if ($statement->rowCount() === 0) {
            throw new \Exception("User not foun in database");
        }

        return $result;
    }

    public function update(User $user): bool
    {
        $sqlUpdate = "UPDATE users SET name = :name, email = :email, birth_date = :birth_date, username = :username WHERE id = :id;";
        $statement = $this->connection->prepare($sqlUpdate);

        $result = $statement->execute([
            ':id' => $user->id(),
            ':name' => $user->name(),
            ':email' => $user->email(),
            ':birth_date' => $user->birthDate()->format('Y-m-d'),
            ':username' => $user->username()
        ]);

        echo "Usuário atualizado";
        return $result;
    }
}


