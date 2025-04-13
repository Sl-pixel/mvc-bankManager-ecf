<?php

require_once __DIR__ . '/../models/repositories/ClientRepository.php';
require_once __DIR__ . '/../models/clients.php';
class ClientController
{
    private ClientRepository $ClientRepository;

    public function __construct()
    {
        $this->ClientRepository = new ClientRepository();
    }
    
    public function home()
    {
        $clients = $this->ClientRepository->getClients();

        require_once __DIR__ . '/../views/clients-list.php';
    }

    public function show(int $id) 
    {
        $client = $this->ClientRepository->getClient($id);
        require_once __DIR__ . '/../views/clients-view.php';
    }

    
    public function create()
    {
        require_once __DIR__ . '/../views/clients-create.php';
    }

    public function store()
    {
        $client = new Client();
        $client->setName($_POST['name']);
        $client->setLastName($_POST['lastName']);
        $client->setEmail($_POST['email']);
        $client->setTelephone($_POST['telephone']);
        $client->setAddress($_POST['address']);
        $this->ClientRepository->create($client);
        header('Location: ?action=viewClientList');
    }

    public function edit(int $id)
    {
        $client = $this->ClientRepository->getClient($id);
        require_once __DIR__ . '/../views/clients-edit.php';
    }

    public function update()
    {
        $client = new Client();
        $client->setId($_POST['id']);
        $client->setName($_POST['name']);
        $client->setLastName($_POST['lastName']);
        $client->setEmail($_POST['email']);
        $client->setTelephone($_POST['telephone']);
        $client->setAddress($_POST['address']);
        $this->ClientRepository->update($client);
        header('Location: ?action=viewClientList');
    }

    public function delete(int $id)
    {
        $this->ClientRepository->delete($id);
        header('Location: ?action=viewClientList');
    }

    public function forbidden()
    {
        require_once __DIR__ . '/../views/404.php';
        http_response_code(404);
    }
   

}