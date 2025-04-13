<?php

require_once __DIR__ . '/../contracts.php';
require_once __DIR__ . '/../../lib/database.php';


class ContractRepository
{
    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }
public function getContractCount(): int
{
    $statement = $this->connection->getConnection()->query("SELECT COUNT(*) as count FROM `contracts`");
    $result = $statement->fetch();
    return (int) ($result['count'] ?? 0);
}

    public function getContracts(): array
    {
        $statement = $this->connection->getConnection()->query('SELECT * FROM contracts');
        $result = $statement->fetchAll();
        $contracts = [];
        foreach ($result as $row) {
            $contract = new Contract();
            $contract->setContractId($row['id']);
            $contract->setContractType($row['type']);
            $contract->setContractAmount($row['amount']);
            $contract->setContractDuration($row['duration']);
            $contract->setClientId($row['clientId']);
            $contracts[] = $contract;
        }

        return $contracts;
    }

    public function getContract(int $id): ?Contract
    {
        $statement = $this->connection->getConnection()->prepare("SELECT * FROM contracts WHERE id=:id");
        $statement->execute(['id' => $id]);
        $result = $statement->fetch();

        if (!$result) {
            return null;
        }

        $contract = new Contract();
        $contract->setContractId($result['id']);
        $contract->setContractType($result['type']);
        $contract->setContractAmount($result['amount']);
        $contract->setContractDuration($result['duration']);
        $contract->setClientId($result['clientId']);
        return $contract;
    }

    public function create(Contract $contract): bool
    {
        $statement = $this->connection
                ->getConnection()
                ->prepare('INSERT INTO contracts (type, amount, duration, clientId) VALUES (:type, :amount, :duration, :clientId);');

        return $statement->execute([
            'type' => $contract->getContractType(),
            'amount' => $contract->getContractAmount(),
            'duration' => $contract->getContractDuration(),
            'clientId' => $contract->getClientId()
        ]);
    }

    public function update(Contract $contract): bool
    {
        $statement = $this->connection
                ->getConnection()
                ->prepare('UPDATE contracts SET type = :type, amount = :amount, duration = :duration, clientId = :clientId WHERE id = :id');


        return $statement->execute([
            'id' => $contract->getContractId(),
            'type' => $contract->getContractType(),
            'amount' => $contract->getContractAmount(),
            'duration' => $contract->getContractDuration(),
            'clientId' => $contract->getClientId()
        ]);
    }

    public function delete(int $id): bool
    {
        $statement = $this->connection
                ->getConnection()
                ->prepare('DELETE FROM contracts WHERE id = :id');
        $statement->bindParam(':id', $id);

        return $statement->execute();
    }
}