<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;
use Framework\Session;

class UserController
{

    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    /**
     * Show register/create form
     * @return void
     */
    public function register()
    {
        loadView('users/create');
    }

    /**
     * Show login form
     * @return void
     */
    public function login()
    {
        loadView('users/login');
    }
    /**
     * store user in database
     * 
     * @return void
     */
    public function store()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $password = $_POST['password'];
        $password_confirmation = $_POST['password_confirmation'];

        $errors = [];
        //validation 
        if (!Validation::email($email)) {
            $errors['email'] = 'Please enter a valid email address';
        }
        //validation 
        if (!Validation::string($name, 2, 50)) {
            $errors['name'] = 'Name must be between 2 and 50 characters';
        }
        //validation 
        if (!Validation::string($password, 6, 12)) {
            $errors['password'] = 'Password must be between 6 and 12 characters';
        }
        //validation 
        if (!Validation::match($password, $password_confirmation)) {
            $errors['password_confirmation'] = 'Passwords do not match';
        }
        // check if email already exists
        $params = [
            'email' => $email,
        ];
        $user = $this->db->query('SELECT * FROM users WHERE email = :email', $params)->fetch();
        if ($user) {
            $errors['email'] = 'Email already exists';
        }

        if (!empty($errors)) {
            loadView('users/create', [
                'errors' => $errors,
                'user' => [
                    'name' => $name,
                    'email' => $email,
                    'city' => $city,
                    'state' => $state,
                ]
            ]);
            exit;
        } else {
            // Validation passed, proceed with saving user...
            //create user account
            $params = [
                'name' => $name,
                'email' => $email,
                'city' => $city,
                'state' => $state,
                'password' => password_hash($password, PASSWORD_DEFAULT),
            ];
            $this->db->query('INSERT INTO users (name, email, city, state, password) VALUES (:name, :email, :city, :state, :password)', $params);

            //get new user ID
            $userId = $this->db->conn->lastInsertId();

            Session::set('user_id', $userId);

            Session::set('user', [
                'id' => $userId,
                'email' => $email,
                'name' => $name,
                'city' => $city,
                'state' => $state,
            ]);

            redirect('/');
        }
    }
    /**
     * Logout a user and kill session
     * @return void 
     */
    public function logout()
    {
        Session::clearAll();
        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 86400, $params['path'], $params['domain']);
        redirect('/');
    }
    /**
     * Authenticate a user with email and password
     * @return void 
     */
    public function authenticate()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $errors = [];

        //validation 
        if (!Validation::email($email)) {
            $errors['email'] = 'Please enter a valid email address';
        }
        //validation 
        if (!Validation::string($password, 6, 12)) {
            $errors['password'] = 'Password must be between 6 and 12 characters';
        }
        //check for errors
        if (!empty($errors)) {
            loadView('users/login', [
                'errors'  => $errors,
            ]);
            
        exit;   
    }
    //check for email
    $params = [
        'email' => $email,
    ];
    $user = $this->db->query('SELECT * FROM users WHERE email = :email', $params)->fetch();
    if (!$user) {
        $errors['email'] = 'Invalid credentials';
        loadView('users/login', [
        'errors'  => $errors,
    ]);
    exit;
    }
        // Check if password is correct
        if (!password_verify($password, $user->password)) {
            $errors['email'] = 'Invalid credentials';
            loadView('users/login', [
                'errors'  => $errors,
            ]);
            exit;
        }

        // Set user session
        Session::set('user', [
            'id' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
            'city' => $user->city,
            'state' => $user->state,
        ]);

        redirect('/');
    }
}
