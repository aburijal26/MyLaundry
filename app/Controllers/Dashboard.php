<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('role') == "ADMIN") {
            $hal = "admin/dashboard";
        } else {
            $hal = "users/dashboard";
        }
        $data = array(
            'id' => $session->get('id'),
            'User_Name' => $session->get('User_Name'),
            'nama_lengkap' => $session->get('nama_lengkap'),
            'role' => $session->get('role'),
            'current_uri' => $this->request->uri->getSegment(1),
        );
        return view($hal, $data);
    }
}
