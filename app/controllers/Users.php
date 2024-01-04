<?php

class Users extends Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function register() {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'FirstName' => trim($_POST['FirstName']),
                'LastName' => trim($_POST['LastName']),
                'DateOfBirth' => trim($_POST['DateOfBirth']),
                'Email' => trim($_POST['Email']),
                'password' => trim($_POST['password']),

                'FirstName_err' => '',
                'LastName_err' => '',
                'Email_err' => '',
                'password_err' => '',
            ];

            // Validate Email
            if (empty($data['Email'])) {
                $data['Email_err'] = 'Please enter email';
            } else {
                // Check email
                if ($this->userModel->findUserByEmail($data['Email'])) {
                    $data['Email_err'] = 'Email is already taken';
                }
            }

            // Validate Name
            if (empty($data['FirstName'])) {
                $data['FirstName_err'] = 'Please enter FirstName';
            }
            if (empty($data['LastName'])) {
                $data['LastName_err'] = 'Please enter LastName';
            }

            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must be at least 6 characters';
            }

            // Make sure errors are empty
            if (empty($data['Email_err']) && empty($data['FirstName_err']) && empty($data['password_err']) && empty($data['LastName_err'])) {
                // Validated

                // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Generate a verification token
                $verificationToken = bin2hex(random_bytes(32));

                // Register User
                if ($this->userModel->register($data, $verificationToken)) {
                    // Send verification email
                    $this->userModel->sendVerificationEmail($data['Email'], $verificationToken);

                    flash('register_success', 'You are registered. Please check your email to verify your account.');
                    redirect('users/login');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('users/register', $data);
            }
        } else {
            // Init data
            $data = [
                'FirstName' => '',
                'LastName' => '',
                'DateOfBirth' => '',
                'Email' => '',
                'password' => '',

                'FirstName_err' => '',
                'LastName_err' => '',
                'Email_err' => '',
                'password_err' => '',
            ];

            // Load view
            $this->view('users/register', $data);
        }
    }
    

    public function login(){
        // Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          // Process form
          // Sanitize POST data
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
          // Init data
          $data =[
            'Email' => trim($_POST['Email']),
            'password' => trim($_POST['password']),
            'Email_err' => '',
            'password_err' => '',      
          ];
  
          // Validate Email
          if(empty($data['Email'])){
            $data['Email_err'] = 'Pleae enter Email';
          }
  
          // Validate Password
          if(empty($data['password'])){
            $data['password_err'] = 'Please enter password';
          }
  
          // Check for user/email
          if($this->userModel->findUserByEmail($data['Email'])){
            // User found
          } else {
            // User not found
            $data['Email_err'] = 'No user found';
          }
  
          // Make sure errors are empty
          if(empty($data['Email_err']) && empty($data['password_err'])){
            // Validated
            // Check and set logged in user
            $loggedInUser = $this->userModel->login($data['Email'], $data['password']);
  
            if($loggedInUser){
              // Create Session
              $this->createUserSession($loggedInUser);
            } else {
              $data['password_err'] = 'Password incorrect';
  
              $this->view('users/login', $data);
            }
          } else {
            // Load view with errors
            $this->view('users/login', $data);
          }
  
  
        } else {
          // Init data
          $data =[    
            'Email' => '',
            'password' => '',
            'Email_err' => '',
            'password_err' => '',        
          ];
  
          // Load view
          $this->view('users/login', $data);
        }
      }

      public function createUserSession($user){
        $_SESSION['id'] = $user->id;
        $_SESSION['Email'] = $user->Email;
        $_SESSION['FirstName'] = $user->FirstName;
        $_SESSION['LastName'] = $user->LastName;
        redirect('');
      }
  
      public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['Email']);
        unset($_SESSION['FirstName']);
        unset($_SESSION['LastName']);
        session_destroy();
        redirect('users/login');
      }
}

    
