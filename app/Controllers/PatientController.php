<?php
namespace App\Controllers;

use App\Models\Patient;
use Smarty;

class PatientController {
    private $smarty;
    private $patient;

    public function __construct() {
        $this->smarty = new Smarty\Smarty();  // une instance de Smarty
        $this->smarty->setTemplateDir('../app/Views/');  
        $this->smarty->setCompileDir('../storage/templates_c/');  

        $this->patient = new Patient();  
    }

    // Affiche la liste des patients
    public function list() {
        
        $patients = $this->patient->getAll();
        $this->smarty->assign('patients', $patients);
        $this->smarty->display('patients.tpl');
    }

    
    public function add() {
        $this->smarty->display('add_patient.tpl');
    }
    
    

    // Enregistre un nouveau patient dans la base de données
    public function store() {
        if (isset($_POST['nom'], $_POST['prenom'], $_POST['date_naissance'], $_POST['email'], $_POST['telephone'])) {
            // Ajout des données
            $this->patient->add($_POST);
            
            header("Location: index.php?action=list");
            exit();
        } else {
            echo "Erreur : données manquantes.";
        }
    }
    

    // Affiche les patients, avec une fonctionnalité de recherche
    public function showPatients() {
        $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';

        if ($searchQuery) {
            $patients = $this->patient->search($searchQuery);
        } else {
            // Sinon, récupérer tous les patients
            $patients = $this->patient->getAll();
        }

        $this->smarty->assign('patients', $patients);
        $this->smarty->assign('searchQuery', $searchQuery);
        $this->smarty->display('patients.tpl');
    }
   // Affiche le formulaire pour modifier un patient
public function edit($id) {
    $patient = $this->patient->getById($id);
    
    if ($patient) {
        $this->smarty->assign('patient', $patient);
        $this->smarty->display('modify_patient.tpl');
    } else {
        header("Location: ?action=list&message=Patient introuvable.");
        exit;
    }
}

public function update($id) {
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['date_naissance'], $_POST['email'], $_POST['telephone'])) {
        $this->patient->update($id, $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['date_naissance']);
        
        header("Location: index.php?action=list");
        exit();
    } else {
        echo "Erreur : données manquantes.";
    }
}
// Méthode pour supprimer un patient
public function delete($id) {
    $patient = $this->patient->getById($id);
    
    if ($patient) {
        $this->patient->delete($id);
        
        header("Location: ../public/index.php?action=list");
        exit();
    } else {
        header("Location: index.php?action=list&message=Patient introuvable.");
        exit();
    }
}

    
}
