<?php

require_once __DIR__ . '/../accounts.php';
require_once __DIR__ . '/../../lib/database.php';


class AccountRepository
{
    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }
    public function getAccountCount(): int
    {
        $statement = $this->connection->getConnection()->query("SELECT COUNT(*) as count FROM `accounts`");
        $result = $statement->fetch();
        return (int) ($result['count'] ?? 0);
    }

    public function getAccounts(): array
    {
        $statement = $this->connection->getConnection()->query('SELECT * FROM accounts');
        $result = $statement->fetchAll();
        $accounts = [];
        foreach ($result as $row) {
            $account = new Account();
            $account->setId($row['id']);
            $account->setRib($row['rib']);
            $account->setType($row['type']);
            $account->setSolde($row['solde']);
            $account->setClientId($row['clientId']);
            $accounts[] = $account;
        }
        
        return $accounts;
    }
    

    public function getAccount(int $id): ?Account
    {
        $statement = $this->connection->getConnection()->prepare("SELECT * FROM accounts WHERE id=:id");
        $statement->execute(['id' => $id]);
        $result = $statement->fetch();

        if (!$result) {
            return null;
        }

        $account = new Account();
        $account->setId($result['id']);
        $account->setRib($result['rib']);
        $account->setType($result['type']);
        $account->setSolde($result['solde']);
        $account->setClientId($result['clientId']);
        return $account;
        
    }
    
    public function create(Account $account): bool
    {
        $statement = $this->connection
        ->getConnection()
        ->prepare('INSERT INTO accounts (rib, type, solde, clientId) VALUES (:rib, :type, :solde, :clientId);');
        
        return $statement->execute([
            'rib' => $account->getRib(),
            'type' => $account->getType(),
            'solde' => $account->getSolde(),
            'clientId' => $account->getClientId()
            
        ]);
    }
    
public function update(Account $account): bool
{
    $statement = $this->connection
        ->getConnection()
        ->prepare('UPDATE accounts SET rib = :rib, type = :type, solde = :solde, clientId = :clientId WHERE id = :id');

    return $statement->execute([
        'id' => $account->getId(),
        'rib' => $account->getRib(),
        'type' => $account->getType(),
        'solde' => $account->getSolde(),
        'clientId' => $account->getClientId(),
    ]);
}

    public function delete(int $id): bool
    {
        $statement = $this->connection
                ->getConnection()
                ->prepare('DELETE FROM accounts WHERE id = :id');
        $statement->bindParam(':id', $id);

        return $statement->execute();
    }

}