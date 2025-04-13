<?php

require_once __DIR__ . '/../lib/database.php';

class Client
{
    private int $id;
    private string $name;
    private string $email;
    private string $telephone;
    private string $lastName;
    private string $adress;
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }
    public function getAddress(): string
    {
        return $this->adress;
    }

   
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = htmlspecialchars($name);
    }
    public function setLastName(string $lastName): void
    {
        $this->lastName = htmlspecialchars($lastName);
    }

    public function setEmail(string $email): void
    {
        $this->email = htmlspecialchars($email);
    }

    public function setTelephone(string $telephone): void
    {
        $this->telephone = htmlspecialchars($telephone);
    }
    public function setAddress(string $adress): void
    {
        $this->adress = htmlspecialchars($adress);
    }

}