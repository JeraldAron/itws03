<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;

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
            redirect('/auth/login');
        }
    }
}
