<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $allowedFields = ['User_Name', 'Password'];

    public function adminLogin($username, $password)
    {
        $query = $this->db->query("SELECT * FROM admin WHERE User_Name='$username'");
        if ($query->getNumRows() <> 0) {
            $verify_pass = $this->db->query("SELECT User_Name, Password FROM login WHERE Password='$password'");
            if ($verify_pass) {
                return $query->getRowArray();
            } else {
                return false;
            }
        }
        return false;
    }

    public function usersLogin($username, $password)
    {
        $query = $this->db->query("SELECT * FROM pelanggan WHERE User_Name='$username'");
        if ($query->getNumRows() <> 0) {
            $verify_pass = $this->db->query("SELECT User_Name, Password FROM login WHERE Password='$password'");
            if ($verify_pass) {
                return $query->getRowArray();
            } else {
                return false;
            }
        }
        return false;
    }
}
