<?php

require_once __DIR__ . '/../models/repositories/ContractRepository.php';
require_once __DIR__ . '/../models/contracts.php';
class ContractController
{
    private ContractRepository $ContractRepository;

    public function __construct()
    {
        $this->ContractRepository = new ContractRepository();
    }
    
    public function home()
    {
        $contracts = $this->ContractRepository->getContracts();
        require_once __DIR__ . '/../views/contracts-list.php';
    }

    public function show(int $id) 
    {
        $contract = $this->ContractRepository->getContract($id);
        require_once __DIR__ . '/../views/contracts-view.php';
    }

    
    public function create()
    {
        require_once __DIR__ . '/../views/contracts-create.php';
    }

    public function store()
    {
        $contract = new Contract();
        $contract->setContractType($_POST['type']);
        $contract->setContractAmount($_POST['amount']);
        $contract->setContractDuration($_POST['duration']);
        $contract->setClientId($_POST['clientId']);
        $this->ContractRepository->create($contract);
        header('Location: ?action=viewContractList');

    }

    public function edit(int $id)
    {
        $contract= $this->ContractRepository->getContract($id);
        require_once __DIR__ . '/../views/contracts-edit.php';
    }

    public function update()
    {
        $contract = new Contract();
        $contract->setContractId($_POST['id']);
        $contract->setContractType($_POST['type']);
        $contract->setContractAmount($_POST['amount']);
        $contract->setContractDuration($_POST['duration']);
        $contract->setClientId($_POST['clientId']);
        $this->ContractRepository->update($contract);

        header('Location: ?action=viewContractList');
    }

    public function delete(int $id)
    {
        $this->ContractRepository->delete($id);

        header('Location: ?action=viewContractList');

    }

    public function forbidden()
    {
        require_once __DIR__ . '/../views/404.php';
        http_response_code(404);
    }
}