<?php

namespace App\Controllers;

use App\Models\Admin as AdminModel;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        // $this->filter('login');
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function showDashboard()
    {
        //  $this->filter('login');
        return view('dashboard');
    }


    public function save()
    {
        $isValid = $this->validate([
            'fullname' => 'trim|required|min_length[3]|max_length[12]',
            'password' => 'trim|required|min_length[6]|max_length[20]',
            'confirm-password' => 'trim|required|min_length[3]|max_length[20]|matches[password]',
            'email' => 'trim|required|valid_email',
        ]);
        if (!$isValid) {
            return redirect()->back()->withInput();
        } else {
            $saveData = [
                'fullname' => $this->request->getPost('fullname'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            ];
            $userModel = new AdminModel();
            $userModel->insert($saveData);

            return redirect()->to(url_to('loginPage'));
        }

    }

    public function logout() {
        // Load the session library
        $session = session();
    
        // Destroy the user's session data
        $session->destroy();
    
        // Redirect the user to the login page
        return redirect()->to(url_to('loginPage'));
    }
    

    public function login()
    {
        $isValid = $this->validate([
            'password' => 'trim|required|min_length[6]|max_length[20]',
            'email' => 'trim|required|valid_email',
        ]);
        if (!$isValid) {
            return redirect()->back()->withInput();
        } else {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $userModel = new AdminModel();

            $user = $userModel->asObject()->where('email', $email)->first();
            if ($user !== NULL) {
                $session = session();
                if (password_verify($password, $user->password)) {
                    $session->set('currentUser', $user);
                    return redirect()->to(url_to('dashboardPage'));
                } else {
                    return redirect()->back()->with('error', "Invalid password");
                }


            } else {
                return redirect()->back()->with('error', "We could not log you in");
            }

            // return redirect()->to(url_to('loginPage'));
        }

    }


}