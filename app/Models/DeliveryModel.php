<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;

class DeliveryModel extends Model
{
    protected $table = 'delivery';
    protected $primaryKey = 'IDDelivery';
    protected $allowedFields = ['IDDelivery', 'IDPemesanan', 'HargaDelivery'];
    protected $column_order = array('IDDelivery', 'IDPemesanan');
    protected $column_search = array('IDDelivery', 'IDPemesanan');
    protected $order = array('IDDelivery' => 'desc');
    protected $request;

    function __construct(RequestInterface $request)
    {
        parent::__construct();
        $this->dt = $this->db->table('v_delivery');
        $this->requestx = $request;
    }

    public function generateCode()
    {
        $kode = $this->checkCode();
        $kodetampil  = "D" . sprintf("%04s", $kode);
        return $kodetampil;
    }

    public function checkCode()
    {
        $query = $this->db->query("SELECT MAX(IDDelivery) as kode FROM delivery");
        if (!is_null($query->getNumRows())) {
            $data = $query->getRow();
            $nourut = substr($data->kode, 1, 4);
            $kode = $nourut + 1;
        } else {
            $kode = 1;
        }
        return $kode;
    }
}
