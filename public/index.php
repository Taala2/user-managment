<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    
    require '../config/config.php';
    require '../app/models/User.php';
    require '../app/controllers/UserController.php';

    $controller = new UserController($db);
    
    $action = $_GET['action'] ?? 'showForm';

    if ($action == 'register') {
        $controller->register();
    } else {
        $controller->register(); 
    }
