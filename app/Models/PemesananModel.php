<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;

class PemesananModel extends Model
{
    protected $table      = 'pemesanan';
    protected $primaryKey = 'IDPemesanan';
    protected $allowedFields = ['IDPemesanan', 'IDAdmin', 'IDPelanggan', 'BeratPakaian', 'TipePakaian', 'KondisiPakaian', 'HariPengerjaan'];

    protected $column_order = array('IDPemesanan', 'IDPelanggan', 'IDAdmin');
    protected $column_search = array('IDPemesanan', 'IDPelanggan', 'IDAdmin');
    protected $order = array('TanggalPemesanan' => 'desc');
    protected $request;

    function __construct(RequestInterface $request)
    {
        parent::__construct();
        $this->dt = $this->db->table('v_pemesanan');
        $this->requestx = $request;
    }

    public function generateCode()
    {
        $kode = $this->checkCode();
        $kodetampil  = "PS" . sprintf("%04s", $kode);
        return $kodetampil;
    }

    public function checkCode()
    {
        $query = $this->db->query("SELECT MAX(IDPemesanan) as kode FROM pemesanan");
        if (!is_null($query->getNumRows())) {
            $data = $query->getRow();
            $nourut = substr($data->kode, 2, 5);
            $kode = $nourut + 1;
        } else {
            $kode = 1;
        }
        return $kode;
    }

    public function saveData($data_pemesanan, $data_delivery, $data_pembayaran)
    {
        $query = $this->db->table($this->table)->insert($data_pemesanan);
        if ($query) {
            $data_delivery['IDPemesanan'] = $data_pemesanan['IDPemesanan'];
            $insert_delivery =  $this->db->table('delivery')->insert($data_delivery);
            if ($insert_delivery) {
                $data_pembayaran['IDPemesanan'] = $data_pemesanan['IDPemesanan'];
                $data_pembayaran['IDDelivery'] = $data_delivery['IDDelivery'];
                return $this->db->table('pembayaran')->insert($data_pembayaran);
            } else {
                return "Error";
            }
        } else {
            return "Error";
        }
    }

    public function updateData($kode, $data)
    {
        return $this->db->table($this->table)->update($data, ['IDPemesanan' => $kode]);
    }

    public function searchData($search)
    {
        return $this->db->table('v_pemesanan')->getWhere($search)->getRow();
    }
}
