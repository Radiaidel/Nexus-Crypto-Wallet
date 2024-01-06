<?php
define('USER_VERIFIED', 1);
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class User {
    private $db;
    private $verificationCode;
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

    public function saveVerificationCode($email, $verificationCode) {
        $this->db->query('UPDATE users SET verification_code = :verificationCode WHERE Email = :email');
        $this->db->bind(':verificationCode', $verificationCode);
        $this->db->bind(':email', $email);
    
        return $this->db->execute();
    }

    private function configureMailer(PHPMailer $mail, $email) {
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nettihadi@gmail.com';
            $mail->Password = 'pkbj krbe ehft vfmh ';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('nettihadi@gmail.com', 'Nabil Ettihadi');
            $mail->addAddress($email);
            $mail->isHTML(true);

            return true;
        } catch (Exception $e) {
            // Handle exceptions (log or display an error message)
            return false;
        }
    }
    public function sendVerificationEmail($email) {
        $mail = new PHPMailer(true);
    
        if ($this->configureMailer($mail, $email)) {
            try {
                
                $verificationCode = mt_rand(100000, 999999);
    
              
                $this->saveVerificationCode($email, $verificationCode);
    
               
                $mail->Subject = 'Verification Email';
                $mail->Body = 'Your verification code is: ' . $verificationCode;
    
                // Envoyer le courriel
                $mail->send();
    
                return $verificationCode; // Retourner le code de vérification
            } catch (Exception $e) {
                // Handle exceptions (log or display an error message)
            }
        }
    
        return false;
    }
    
    public function verifyUserByCode($verificationCode) {
        // Query the database to find the user by verification code
        $this->db->query('SELECT * FROM users WHERE verification_code = :verificationCode');
        $this->db->bind(':verificationCode', $verificationCode);
        
        // Fetch the result as an associative array
        $user = $this->db->single(PDO::FETCH_ASSOC);
        
        if ($user && $this->isVerificationCodeValid($user, $verificationCode)) {
            // Update the user's status as verified (optional)
            $userId = isset($user['id']) ? $user['id'] : null;
            // $this->updateVerificationStatus($userId);
        
            return $user;
        }
        
        return false;
    }
   
    private function isVerificationCodeValid($user, $providedCode) {
        // Implement any additional validation logic for verification codes here
        // This could include checking the expiration time or other criteria
        
        // For simplicity, this example assumes a direct string match
        return $user['verification_code'] === $providedCode;
    }
    // private function updateVerificationStatus($userId) {
    //     $this->db->query('UPDATE users SET verified = :status WHERE UserID = :userId');
    //     $this->db->bind(':status', USER_VERIFIED);
    //     $this->db->bind(':userId', $userId);
    //     $this->db->execute();
    // }
    
    public function buycrypto($quantity , $name , $price , $rank ){
        // $this->db->query("INSERT INTO crypto(Quantity , Element_name, Element_price,Element_rank) VALUES(:quantity , :name , :price , :rank)");



        $this->db->query("INSERT INTO wallet_elements(Quantity , Element_name, Element_price,Element_rank) VALUES(:quantity , :name , :price , :rank)");
        $this->db->bind('quantity', $quantity);
        $this->db->bind('name', $name);
        $this->db->bind('price', $price);
        $this->db->bind('rank', $rank);
        $this->db->execute();
    }

}
