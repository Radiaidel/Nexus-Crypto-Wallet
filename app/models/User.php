// app/models/User.php
<?php
class User {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // Méthode pour enregistrer un utilisateur
    public function register($data) {
        $this->db->query('INSERT INTO users (FirstName, LastName, DateOfBirth, NexusID, Email, Password) VALUES(:FirstName, :LastName, :DateOfBirth, :nexusID, :Email, :password)');
        
        // Liaison des valeurs
        $this->db->bind(':FirstName', $data['FirstName']);
        $this->db->bind(':LastName', $data['LastName']); // Assurez-vous d'avoir cette clé dans le formulaire
        $this->db->bind(':DateOfBirth', $data['DateOfBirth']); // Assurez-vous d'avoir cette clé dans le formulaire
        $this->db->bind(':nexusID', $data['nexusID']); // Assurez-vous d'avoir cette clé dans le formulaire
        $this->db->bind(':Email', $data['Email']);
        $this->db->bind(':password', $data['password']);

        // Exécution de la requête
        return $this->db->execute();
    }

    // Méthode pour trouver un utilisateur par e-mail
    public function findUserByEmail($Email) {
        $this->db->query('SELECT * FROM users WHERE Email = :Email');
        $this->db->bind(':Email', $Email);

        $row = $this->db->single();

        // Vérifiez s'il y a un utilisateur
        return ($this->db->rowCount() > 0) ? true : false;
    }

    // Méthode pour se connecter
    public function login($Email, $password) {
        $this->db->query('SELECT * FROM users WHERE Email = :Email');
        $this->db->bind(':Email', $Email);

        $row = $this->db->single();
        $hashedPassword = $row->Password;

        // Vérifiez le mot de passe
        if (password_verify($password, $hashedPassword)) {
            return $row; // Retourne l'utilisateur
        } else {
            return false; // Mot de passe incorrect
        }
    }
}
