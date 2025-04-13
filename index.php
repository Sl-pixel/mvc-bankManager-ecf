<?php

session_start();
require_once __DIR__ . '/controllers/ClientController.php';
require_once __DIR__ . '/controllers/AdminController.php';
require_once __DIR__ . '/controllers/ContractController.php';
require_once __DIR__ . '/controllers/AccountController.php';
require_once __DIR__ . '/controllers/HomeController.php';
require_once __DIR__ . '/lib/utils.php';

$contractController = new ContractController();
$clientController = new ClientController();
$accountController = new AccountController();
$adminController = new AdminController();
$homeController = new HomeController();

$action = $_GET['action'] ?? 'login';
$id = $_GET['id'] ?? null;

// Vérifie si l'utilisateur est connecté
// Actions disponibles pour les utilisateurs non connectés

switch ($action) {
    // admin connexion
    case 'doLogin':
        // Traite la soumission du formulaire de connexion
        $adminController->doLogin();
        break;
    case 'login':
        // Affiche le formulaire de connexion
        $adminController->login();
        break;
    case 'logout':
        // Déconnecte l'utilisateur
        $adminController->logout();
        break;

    // client
    case 'viewClient':
        // Affiche une tâche spécifique
        $clientController->show($id);
        break;
    case 'viewClientList':
        // Traite la soumission du formulaire de connexion
        $clientController->home();
        break;
    case 'createClient':
        // Affiche le formulaire de création d'une nouvelle tâche
        $clientController->create();
        break;
    case 'editClient':
        // Affiche le formulaire d'édition d'une tâche spécifique
        $clientController->edit($id);
        break;
    case 'storeClient':
        // Enregistre une nouvelle tâche
        $clientController->store();
        break;
    case 'deleteClient':
        // Supprime une tâche spécifique
        $clientController->delete($id);
        break;
    case 'updateClient':
        // Met à jour une tâche existante
        $clientController->update();
        break;


    // compte
    case 'viewAccount':
        // Affiche une tâche spécifique
        $accountController->show($id);
        break;
    case 'viewAccountList':
        // Affiche une tâche spécifique
        $accountController->home();
        break;
    case 'createAccount':
        // Affiche le formulaire de création d'une nouvelle tâche
        $accountController->create();
        break;
    case 'storeAccount':
        // Enregistre une nouvelle tâche
        $accountController->store();
        break;
    case 'editAccount':
        // Affiche le formulaire d'édition d'une tâche spécifique
        $accountController->edit($id);
        break;
    case 'deleteAccount':
        // Supprime une tâche spécifique
        $accountController->delete($id);
        break;
    case 'updateAccount':
        // Met à jour une tâche existante
        $accountController->update();
        break;


    // contrat


    case 'viewContract':
        // Affiche une tâche spécifique
        $contractController->show($id);
        break;
    case 'viewContractList':
        // Affiche une tâche spécifique
        $contractController->home();
        break;
    case 'createContract':
        // Affiche le formulaire de création d'une nouvelle tâche
        $contractController->create();
        break;
    case 'storeContract':
        // Enregistre une nouvelle tâche
        $contractController->store();
        break;
    case 'editContract':
        // Affiche le formulaire d'édition d'une tâche spécifique
        $contractController->edit($id);
        break;
    case 'deleteContract':
        // Supprime une tâche spécifique
        $contractController->delete($id);
        break;
    case 'updateContract':
        // Met à jour une tâche existante
        $contractController->update();
        break;

    //ALL 
    case 'home':
        // Affiche la page d'accueil des tâches
        $homeController->home();
        break;
    default:
        // Affiche une page d'erreur si l'action n'est pas reconnue
        $clientController->forbidden();
        break;
}
?>