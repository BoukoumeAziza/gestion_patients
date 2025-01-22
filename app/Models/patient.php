<?php
namespace App\Models;

class Patient {
    private $pdo;

    public function __construct() {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=mon_projet', 'root', '');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    // Récupérer tous les patients
    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM patients');
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Ajouter un nouveau patient
    public function add($data) {
        $stmt = $this->pdo->prepare('INSERT INTO patients (nom, prenom, date_naissance, email, telephone) VALUES (:nom, :prenom, :date_naissance, :email, :telephone)');
        $stmt->execute([
            ':nom' => $data['nom'],
            ':prenom' => $data['prenom'],
            ':date_naissance' => $data['date_naissance'],
            ':email' => $data['email'],
            ':telephone' => $data['telephone'],
        ]);
    }

    public function search($searchQuery) {
        $stmt = $this->pdo->prepare("SELECT * FROM patients WHERE nom LIKE :searchQuery OR prenom LIKE :searchQuery");
        $stmt->execute(['searchQuery' => '%' . $searchQuery . '%']);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Récupérer un patient par son ID
public function getById($id) {
    $stmt = $this->pdo->prepare('SELECT * FROM patients WHERE id = :id');
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}
public function update($id, $nom, $prenom, $email, $telephone, $date_naissance) {
    $stmt = $this->pdo->prepare('
        UPDATE patients 
        SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone, date_naissance = :date_naissance 
        WHERE id = :id
    ');

    //  la requête de mise à jour
    $stmt->execute([
        ':id' => $id,
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':email' => $email,
        ':telephone' => $telephone,
        ':date_naissance' => $date_naissance
    ]);
}
public function delete($id) {
    $stmt = $this->pdo->prepare('DELETE FROM patients WHERE id = :id');
    $stmt->execute(['id' => $id]);
}



}
