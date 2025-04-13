<?php

require_once __DIR__ . '/../clients.php';
require_once __DIR__ . '/../../lib/database.php';


class ClientRepository
{
    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    public function getClientCount(): int
    {
        $statement = $this->connection->getConnection()->query("SELECT COUNT(*) as count FROM `clients`");
        $result = $statement->fetch();
        return (int) ($result['count'] ?? 0);
    }

    public function getClients(): array
    {
        $statement = $this->connection->getConnection()->query('SELECT * FROM clients');
        $result = $statement->fetchAll();
        $clients = [];
        foreach ($result as $row) {
            $client = new Client();
            $client->setId($row['id']);
            $client->setName($row['name']);
            $client->setLastName($row['lastName']);
            $client->setEmail($row['email']);
            $client->setTelephone($row['telephone']);
            $client->setAddress($row['address']);
            $clients[] = $client;
        }

        return $clients;
    }

    public function getClient(int $id): ?Client
    {
        // Cette requête est correcte
        $statement = $this->connection->getConnection()->prepare("SELECT * FROM clients WHERE id=:id");
        $statement->execute(['id' => $id]);
        $result = $statement->fetch();

        if (!$result) {
            return null;
        }

        $client = new Client();
        $client->setId($result['id']);
        $client->setName($result['name']);
        $client->setLastName($result['lastName']);
        $client->setEmail($result['email']);
        $client->setTelephone($result['telephone']);
        $client->setAddress($result['address']);

        return $client;

    }

    public function create(Client $client): bool
    {
        // Cette requête est correcte
        $statement = $this->connection
        ->getConnection()
        ->prepare('INSERT INTO clients (name, lastName, email, telephone, address) VALUES (:name, :lastName, :email, :telephone, :address);');

        return $statement->execute([
            'name' => $client->getName(),
            'lastName' => $client->getLastName(),
            'email' => $client->getEmail(),
            'telephone' => $client->getTelephone(),
            'address' => $client->getAddress()
        ]);
    }

    public function update(Client $client): bool
    {
        // Cette requête est correcte
        $statement = $this->connection
                ->getConnection()
                ->prepare('UPDATE clients SET name = :name, lastName = :lastName, email = :email, telephone = :telephone, address = :address WHERE id = :id');

        return $statement->execute([
            'id' => $client->getId(),
            'name' => $client->getName(),
            'lastName' => $client->getLastName(),
            'email' => $client->getEmail(),
            'telephone' => $client->getTelephone(),
            'address' => $client->getAddress()
        ]);
    }

    public function delete(int $id): bool
    {
        // Cette requête est correcte
        $statement = $this->connection
                ->getConnection()
                ->prepare('DELETE FROM clients WHERE id = :id');
        $statement->bindParam(':id', $id);

        return $statement->execute();
    }

}
