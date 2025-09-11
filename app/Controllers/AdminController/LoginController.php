<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        helper('form');

        $session = session();

        if ($this->request->getMethod() === 'GET') {
            return view('web/login');
        } elseif ($this->request->getMethod() === 'POST') {
            helper('form');
            if (
                $this->validate(
                    [
                        'email' => 'required|valid_email|max_length[254]',
                        'password' => 'required|max_length[254]'
                    ],
                    [
                        'email' => [
                            'required' => 'Please provide an email',
                            'valid_email' => 'Please provide a valid email',
                            'max_length' => 'Email is too long',
                        ],
                        'password' => [
                            'required' => 'Please provide a password',
                            'max_length' => 'Password is too long',
                        ]
                    ]
                )
            ) {

                $userModel = new UserModel();
                $result = $userModel->checklogindata(
                    $this->request->getPost('email'),
                    md5($this->request->getPost('password')),
                );
                if ($result) {

                    if ($result['user_type'] === 'admin') {
                        $user = [
                            'id' => $result['user_id'],
                            'email' => $result['email'],
                        ];

                        $session->set('admin_auth', $user);
                        return redirect()->to(base_url('admin/dashboard'));
                    } else {
                        $user = [
                            'id' => $result['user_id'],
                            'email' => $result['email'],
                            'first_name' => $result['f_name'],
                            'is_logged' => $result['is_logged'],
                        ];
                        $session->set('customer_auth', $user);
                        return redirect()->to(base_url('/'));
                    }
                } else {
                    $session->setFlashdata('error_msg', ["msg" => 'Invalid Credentials', "type" => "danger"]);
                    return redirect()->to(base_url('/login'))->withInput();
                }
            } else {
                $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);
                return redirect()->to(base_url('/login'))->withInput();
            }
        }
    }
}
