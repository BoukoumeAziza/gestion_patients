<?php
require_once '../vendor/autoload.php';
use App\Controllers\PatientController;

$controller = new PatientController();

$action = $_GET['action'] ?? 'list';

// Traiter l'action
switch ($action) {
    case 'add':
        $controller->add();  
        break;
    case 'store':
        $controller->store();  
        break;
    case 'edit':
        $id = $_GET['id'] ?? null; 
        if ($id) {
            $controller->edit($id);  
        } else {
            header("Location: index.php?action=list");
            exit;
        }
        break;
    case 'update':
        $id = $_GET['id'] ?? null;
        if ($id) {
            $controller->update($id);  
        }
        break;
    case 'delete':
        $id = $_GET['id'] ?? null; 
        if ($id) {
            $controller->delete($id);  
        } else {
            header("Location: index.php?action=list");
            exit;
        }
        break;
    default:
        $controller->list();  
        break;
}
