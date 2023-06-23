<?php

namespace BookList\Domain\Model;

class Book
{
    private ?int $id;
    private string $name;
    private string $theme;
    private float $price;
    private string $author;
    private int $userId;

    public function __construct(
        ?int $id,
        string $name,
        string $theme,
        float $price,
        string $author,
        int $userId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->theme = $theme;
        $this->price = $price;
        $this->author = $author;
        $this->userId = $userId;
    }

    public function defineId(int $id): void
    {
        if (!is_null($this->id)) {
            throw new \DomainException("Você só pode definir o ID uma única vez");
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
    
    public function theme(): string
    {
        return $this->theme;
    }
    
    public function price(): float
    {
        return $this->price;
    }
    
    public function author(): string
    {
        return $this->author;
    }

    public function userId()
    {
        return $this->userId;
    }


}