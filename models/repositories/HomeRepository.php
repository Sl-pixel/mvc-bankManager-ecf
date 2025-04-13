<?php

require_once __DIR__ . '/../../lib/database.php';
require_once __DIR__ . '/ClientRepository.php';
require_once __DIR__ . '/AccountRepository.php';
require_once __DIR__ . '/ContractRepository.php';

class HomeRepository
{
    public DatabaseConnection $connection;
    public $ClientRepository;
    public $AccountRepository;
    public $ContractRepository;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
        $this->ClientRepository = new ClientRepository();
        $this->AccountRepository = new AccountRepository();
        $this->ContractRepository = new ContractRepository();
    }

    public function getTotals(): array
    {
        return [
            "clientCount" => $this->ClientRepository->getClientCount(),
            "accountCount" => $this->AccountRepository->getAccountCount(),
            "contractCount" => $this->ContractRepository->getContractCount()
        ];
    }
}
