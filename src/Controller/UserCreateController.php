<?php

namespace BookList\Controller;

use BookList\Domain\Model\User;

class UserCreateController extends UserController
{

    public function create(): void
    {
        require_once __DIR__ . '/../../views/users/create.view.php';
    }

    public function store()
    {
        try {
            $user = new User(
                $this->id(),
                $this->name(),
                $this->email(),
                $this->birthDate(),
                $this->username(),
                $this->password()
            );
            $this->pdo->beginTransaction();
            $this->userRepository->insert($user);
            $this->pdo->commit();

            header('Location: /users?success=1');
        } catch (\RuntimeException $e) {
            echo $e;
            $this->pdo->rollBack();
        } catch (\Exception $e) {
            echo $e->getMessage();
            $this->pdo->rollBack();
        }
    }
    public function id(): null
    {
        return null;
    }

    function fieldEmpty($param)
    {
        if (empty($param)) {
            throw new \Exception("Você não pode enviar dados vazios!!. <a href='javascript:history.back()'>Voltar</a>");
            exit();
        }
    }

    public function invalidDate($param)
    {
        if (!$param) {
            throw new \Exception("Insira uma data válida. <a href='/userCreate'>Voltar</a>:");
            exit();
        }
    }

    public function name(): string
    {
        $this->fieldEmpty($_POST['name']);
        return $_POST['name'];
    }

    public function email(): string
    {
        $this->fieldEmpty($_POST['email']);
        return $_POST['email'];
    }

    public function birthDate(): \DateTimeInterface
    {
        $birthDate = \DateTimeImmutable::createFromFormat('Y-m-d', $_POST['birthDate']);
        $this->invalidDate($birthDate);
        return $birthDate;
    }

    public function username(): string
    {
        $this->fieldEmpty($_POST['name']);
        return $_POST['username'];
    }

    public function password(): string
    {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $this->fieldEmpty($password);
        return $password;
    }


}