<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        helper('form');
        $data['title'] = "Login | MyLaundry";
        return view('login', $data);
    }

    public function auth()
    {
        $session = session();
        $model = new LoginModel();
        $username = $this->request->getVar('User_Name');
        $password = $this->request->getVar('Password');
        $adminlogin = $model->adminLogin($username, $password);
        $userlogin = $model->usersLogin($username, $password);

        if ($adminlogin) {
            $ses_data = [
                'id'           => $adminlogin['IDAdmin'],
                'User_Name'    => $adminlogin['User_Name'],
                'nama_lengkap' => $adminlogin['Nama_Admin'],
                'Tgl_Lahir'    => $adminlogin['Tgl_Lahir'],
                'NomorTlp'     => $adminlogin['NomorTlp'],
                'role'         => "ADMIN",
                'logged_in'    => TRUE
            ];
            $session->set($ses_data);
            return redirect()->to('/dashboard');
        } else if ($userlogin) {
            $ses_data = [
                'id'            => $userlogin['IDPelanggan'],
                'User_Name'     => $userlogin['User_Name'],
                'nama_lengkap'  => $userlogin['NamaPelanggan'],
                'Email'         => $userlogin['Email'],
                'NomorTlp'      => $userlogin['NomorTlp'],
                'role'          => "USERS",
                'logged_in'    => TRUE
            ];
            $session->set($ses_data);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
