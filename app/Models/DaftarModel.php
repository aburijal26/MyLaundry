<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarModel extends Model
{
    protected $table = 'daftar';
    protected $allowedFields = ['User_Name', 'Nama_Depan', 'Nama_Belakang', 'Password'];

    public function saveData($data_daftar, $data_login, $data_pelanggan)
    {
        $query = $this->db->table($this->table)->insert($data_daftar);
        if ($query) {
            $data_login['User_Name'] = $data_daftar['User_Name'];
            $data_login['Password'] = $data_daftar['Password'];
            $insert_login =  $this->db->table('login')->insert($data_login);
            if ($insert_login) {
                $data_pelanggan['User_Name'] = $data_daftar['User_Name'];
                return $this->db->table('pelanggan')->insert($data_pelanggan);
            } else {
                return "Error";
            }
        } else {
            return "Error";
        }
    }
}
