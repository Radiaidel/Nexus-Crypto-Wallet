<?php

class Users extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function register()
    {
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


                // Register User
                if ($this->userModel->register($data)) {

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


    public function login()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'Email' => trim($_POST['Email']),
                'password' => trim($_POST['password']),
                'Email_err' => '',
                'password_err' => '',
            ];

            // Validate Email
            if (empty($data['Email'])) {
                $data['Email_err'] = 'Please enter Email';
            }

            // Check for user/email
            $userExists = $this->userModel->findUserByEmail($data['Email']);

            if ($userExists) {
                // User found
                // Send verification email and get the verification code
                $verificationCodeSent = $this->userModel->sendVerificationEmail($data['Email']);

                if ($verificationCodeSent) {
                    // Pass the verification code to the view
                    $data['verificationCode'] = $verificationCodeSent;

                    // Load view with verification code input
                    $this->view('users/verify', $data);
                } else {
                    // Handle email sending error
                    $data['Email_err'] = 'Error sending verification email';
                    $this->view('users/login', $data);
                }
            } else {
                // User not found, redirect to the registration page
                redirect('users/register');
            }

        } else {
            // Init data
            $data = [
                'Email' => '',
                'password' => '',
                'Email_err' => '',
                'password_err' => '',
            ];

            // Load view
            $this->view('users/login', $data);
        }
    }
    public function verify()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $verificationCode = trim($_POST['verificationCode']);

            // Check if the verification code is valid
            $user = $this->userModel->verifyUserByCode($verificationCode);

            if ($user) {
                // // Update user status as verified (optional)
                // $this->userModel->updateVerificationStatus($user->id);

                // Create user session
                $this->createUserSession($user);

                flash('verify_success', 'Your email has been verified. Welcome!');
                redirect('pages/dashboard'); // Redirect to the dashboard or any other page
            } else {
                flash('verify_error', 'Invalid verification code. Please try again.');
                $this->view('users/verify'); // Reload the verification page with an error message
            }
        } else {
            // Redirect to the login page if accessed directly without a POST request
            redirect('users/login');
        }
    }
    public function createUserSession($user)
    {
        $_SESSION['id'] = $user->id;
        $_SESSION['Email'] = $user->Email;
        $_SESSION['FirstName'] = $user->FirstName;
        $_SESSION['LastName'] = $user->LastName;
        redirect('pages');
    }

    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['Email']);
        unset($_SESSION['FirstName']);
        unset($_SESSION['LastName']);
        session_destroy();
        redirect('users/login');
    }
}