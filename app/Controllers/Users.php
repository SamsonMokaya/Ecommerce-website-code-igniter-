<?php

 

namespace App\Controllers;

use App\Models\UserModel;


class Users extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);

        //validation here
        echo view('landingpage', $data);
    }
    public function login(){
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == 'post'){
            $rules = [
                'email' => 'required|min_length[7]|max_length[30]|valid_email',
                'password' => 'required|min_length[4]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Email or password dont match'
                ]

            ];



            if(! $this -> validate($rules, $errors)){
                $data['validation'] = $this -> validator;
            }else{
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))
                              ->first();              
                //return redirect() -> to('http://localhost:8080/login');
                $this->setUserMethod($user);
                return redirect()->to('http://localhost:8080/dashboard');

            }
        }
        echo view('login', $data);
    }

    private function setUserMethod($user){
        $data = [
			'id' => $user['userid'],
			'firstname' => $user['firstname'],
			'lastname' => $user['lastname'],
			'email' => $user['email'],
			'isLoggedIn' => true,
		];
        session()->set($data);
        return true;

    }

    public function register(){
        $data = [];
        helper(['form']);

        //validation here
        
        if($this->request->getMethod() == 'post'){
            $rules = [
                'firstname' => 'required|min_length[4]|max_length[20]',
                'lastname' => 'required|min_length[4]|max_length[20]',
                'email' => 'required|min_length[7]|max_length[30]|valid_email|is_unique[user.email]',
                'password' => 'required|min_length[4]|max_length[255]',
            ];
            if(! $this -> validate($rules)){
                $data['validation'] = $this -> validator;
            }else{
                $model = new UserModel();
                $newData = [
                    'firstname' => $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'email' => $this->request->getVar('email'),
                    'gender' => $this->request->getVar('gender'),
                    'password' => $this->request->getVar('password'),
                ];
                $model -> save($newData);
                $session = session();
                $session -> setFlashdata('success', 'Sucesful registration');

                return redirect() -> to('http://localhost:8080/login');


            }
        }
        echo view('register', $data);
    }
}

