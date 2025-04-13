<?php

require_once __DIR__ . '/../models/repositories/AdminRepository.php';
require_once __DIR__ . '/../models/admins.php';
class AdminController
{
    private AdminRepository $AdminRepository;

    public function __construct()
    {
        $this->AdminRepository = new AdminRepository();
    }

   
    public function login()
    {
        require __DIR__ . '/../views/login.php';
    }

    public function doLogin()
    {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        $admin = $this->AdminRepository->getAdminByEmail($email);
        if (password_verify($password, $admin->getPassword())) {
            $_SESSION['connected'] = true;
            header('Location: ?action=home');
            exit;
        } else {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
    }

    public function logout()
    {
        unset($_SESSION['connected']);
        header('Location: ?');
        exit;
    }
  
}