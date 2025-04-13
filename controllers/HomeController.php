<?php

require_once __DIR__ . '/../models/repositories/HomeRepository.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/database.php';

class HomeController 
{
    private HomeRepository $homeRepository;
    public function __construct()
    {
        $this->homeRepository = new HomeRepository();
    }
    
    public function home()
    {
        if (isAdmin()) {
            $totals = $this->homeRepository->getTotals();
            require __DIR__ . '/../views/home.php';
        } else {
            require __DIR__ . '/../views/login.php';
        }
    }
}