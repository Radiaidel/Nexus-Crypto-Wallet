<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class User {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // Méthode pour enregistrer un utilisateur
    public function register($data) {
        // Generate a random number for NexusID
        $nexusID = $this->generateRandomNumber();
        
        $this->db->query('INSERT INTO users (FirstName, LastName, DateOfBirth, NexusID, Email, Password) VALUES(:FirstName, :LastName, :DateOfBirth, :nexusID, :Email, :password)');
        
        // Liaison des valeurs
        $this->db->bind(':FirstName', $data['FirstName']);
        $this->db->bind(':LastName', $data['LastName']);
        $this->db->bind(':DateOfBirth', $data['DateOfBirth']);
        $this->db->bind(':nexusID', $nexusID);
        $this->db->bind(':Email', $data['Email']);
        $this->db->bind(':password', $data['password']);

        // Exécution de la requête
        return $this->db->execute();
    }

    // Méthode pour générer un nombre aléatoire
    private function generateRandomNumber() {
        // You can customize the length of the random number as needed
        $randomNumber = mt_rand(100000, 999999);
        return $randomNumber;
    }


    // Méthode pour trouver un utilisateur par e-mail
    public function findUserByEmail($Email) {
        $this->db->query('SELECT * FROM users WHERE Email = :Email');
        $this->db->bind(':Email', $Email);

        $row = $this->db->single(PDO::FETCH_OBJ); // Fetch as object

        // Vérifiez s'il y a un utilisateur
        return ($this->db->rowCount() > 0) ? $row : false;
    }

    // Méthode pour se connecter
    public function login($Email, $password) {
        $row = $this->findUserByEmail($Email);

        // Vérifiez si l'utilisateur existe
        if ($row) {
            $hashedPassword = $row->Password;

            // Vérifiez le mot de passe
            if (password_verify($password, $hashedPassword)) {
                return $row; // Retourne l'utilisateur
            }
        }

        return false; // Mot de passe incorrect ou utilisateur inexistant
    }


    public function sendVerificationEmail($email, $token) {
        // Create a PHPMailer instance (make sure to include PHPMailer in your script)
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'k130003188@gmail.com';
            $mail->Password = 'lcsn hdcs mkia rvgc';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('k130003188@gmail.com', 'Mohammed');
            $mail->addAddress($email);
            $mail->Subject = 'Verification Email';
            $mail->Body = 'Please click the link below to verify your email: <a href="' . URLROOT . '/users/verify/' . $token . '">Verify Email</a>';
            $mail->isHTML(true);

            $mail->send();
            return true;
        } catch (Exception $e) {
            // Handle exceptions (log or display an error message)
            return false;
        }
    }
    
}
