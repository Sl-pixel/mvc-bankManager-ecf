<?php

require_once __DIR__ . '/../models/repositories/AccountRepository.php';
require_once __DIR__ . '/../models/accounts.php';
class AccountController
{
    private AccountRepository $AccountRepository;
    public function __construct()
    {
        $this->AccountRepository = new AccountRepository();
    }

    public function home()
    {
        $accounts = $this->AccountRepository->getAccounts();
        require_once __DIR__ . '/../views/account-list.php';
    }

    public function show(int $id) 
    {
        $account = $this->AccountRepository->getAccount($id);
        require_once __DIR__ . '/../views/account-view.php';
    }

    
    public function create()
    {
        require_once __DIR__ . '/../views/account-create.php';
    }

    public function store()
    {
        $account = new Account();
        $account->setRib($_POST['rib']);
        $account->setType($_POST['type']);
        $account->setSolde($_POST['solde']);
        $account->setClientId($_POST['clientId']);
        $this->AccountRepository->create($account);
        header('Location: ?action=viewAccountList');
    }

    public function edit(int $id)
    {
        $account = $this->AccountRepository->getAccount($id);
        require_once __DIR__ . '/../views/account-edit.php';
    }

    public function update()
    {
        $account = new Account();
        $account->setId($_POST['id']);
        $account->setRib($_POST['rib']);
        $account->setType($_POST['type']);
        $account->setSolde($_POST['solde']);
        $account->setClientId($_POST['clientId']);
        $this->AccountRepository->update($account);

        header('Location: ?action=viewAccountList');
    }

    public function delete(int $id)
    {
        $this->AccountRepository->delete($id);
        header('Location: ?action=viewAccountList');
    }

    public function forbidden()
    {
        require_once __DIR__ . '/../views/404.php';
        http_response_code(404);
    }
}