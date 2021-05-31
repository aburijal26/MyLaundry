<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('role') == "ADMIN") {
            $hal = "admin/profile";
            $data = array(
                'id' => $session->get('id'),
                'User_Name' => $session->get('User_Name'),
                'nama_lengkap' => $session->get('nama_lengkap'),
                'NomorTlp' => $session->get('NomorTlp'),
                'role' => $session->get('role'),
                'current_uri' => $this->request->uri->getSegment(1),
            );
        } else {
            $hal = "users/profile";
            $data = array(
                'id' => $session->get('id'),
                'User_Name' => $session->get('User_Name'),
                'nama_lengkap' => $session->get('nama_lengkap'),
                'NomorTlp' => $session->get('NomorTlp'),
                'Email' => $session->get('Email'),
                'role' => $session->get('role'),
                'current_uri' => $this->request->uri->getSegment(1),
            );
        }

        return view($hal, $data);
    }
}
