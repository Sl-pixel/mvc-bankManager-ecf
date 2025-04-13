<?php

require_once __DIR__ . '/../admins.php';
require_once __DIR__ . '/../../lib/database.php';


class AdminRepository
{
    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    
    public function getAdminByEmail(string $email): ?Admin
    {
        $statement = $this->connection->getConnection()->prepare('SELECT * FROM admins WHERE email = :email');
        $statement->execute(['email' => $email]);

        $result = $statement->fetch();

        if (!$result) {
            return null;
        }

        $admin = new Admin();
        $admin->setId($result['id']);
        $admin->setEmail($result['email']);
        $admin->setPassword($result['password']);
        return $admin;
    }


}