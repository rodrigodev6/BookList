<?php

namespace BookList\Domain\Model;

class User
{
    private ?int $id;
    private string $name;
    private string $email;
    private \DateTimeInterface $birthDate;
    private string $username;
    private string $password;

    public function __construct(
        ?int $id,
        string $name,
        string $email,
        \DateTimeInterface $birthDate,
        string $username,
        string $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->birthDate = $birthDate;
        $this->username = $username;
        $this->password = $password;
    }

    public function defineId(int $id): void
    {
        if (!is_null($this->id)){
            throw new \DomainException('Você só pode definir o ID uma vez');
        }

        $this->id = $id;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function birthDate(): \DateTimeInterface
    {
        return $this->birthDate;
    }

    public function age(): void
    {
    }

    public function username(): string
    {
        return $this->username;
    }

    public function password(): string
    {
        //password_hash gera um hash aleatório para senha
        return password_hash($this->password, PASSWORD_DEFAULT);
    }


}