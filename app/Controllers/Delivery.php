<?php

namespace App\Controllers;

use App\Models\DeliveryModel;
use App\Models\ServerSideModel;
use Config\Services;

class Delivery extends BaseController
{
    public function __construct()
    {
        // load Helper Form
        helper('form');

        $this->requestx = Services::request();
        // load Model
        // $this->pemesanan = new Pemesanan($this->requestx);
        $this->serverside_model = new ServerSideModel();
    }
    public function index()
    {
        $session = session();
        if ($session->get('role') == "ADMIN") {
            $hal = "admin/delivery";
        } else {
            $hal = "users/delivery";
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

    public function ajax_list()
    {
        $model = new DeliveryModel($this->requestx);
        $session = session();
        if ($this->request->getMethod(true) === 'POST') {
            $column_order = array('IDPemesanan', 'IDPelanggan', 'IDAdmin');
            $column_search = array('IDPemesanan', 'IDPelanggan', 'IDAdmin');
            $order = array('TanggalPemesanan' => 'desc');

            if ($session->get('role') == "ADMIN") {
                $where = "";
            } else {
                $where = array('IDPelanggan' => $session->get('id'));
            }

            $lists = $this->serverside_model->get_datatables('v_pembayaran', $column_order, $column_search, $order, $where);

            $data = [];
            $no = $this->request->getPost("start");
            foreach ($lists as $list) {
                $no++;
                $row = [];
                $row[] = $no;
                $row[] = $list->IDDelivery;
                $row[] = $list->IDPemesanan;
                $row[] = $list->Jumlah;
                $row[] = date('d M Y H:i:s', strtotime($list->TanggalPemesanan));
                $row[] = $list->Status_Pembayaran;
                $row[] = $list->IDPembayaran;
                $data[] = $row;
            }
            $output = [
                "draw" => $this->request->getPost('draw'),
                "recordsTotal" => $this->serverside_model->count_all('v_pembayaran', $where),
                "recordsFiltered" => $this->serverside_model->count_filtered('v_pembayaran', $column_order, $column_search, $order, $where),
                "data" => $data
            ];
            echo json_encode($output);
        }
    }
}
