<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class Pegawai extends BaseController
{
    public function index()
    {
        // $modelPegawai = new PegawaiModel();
        // $data['pegawai'] = $modelPegawai->dataPegawai();
        // return view('index', $data);

        return view('index');
    }

    // data pegawai (ajax)
    public function pegawaiAjax()
    {
        $request = Services::request();
        $pegawaiModel = new PegawaiModel($request);

        if ($request->getMethod(true) === 'POST') {
            $lists = $pegawaiModel->getDatatables();
            $data = [];
            $no = $request->getPost('start');

            foreach ($lists as $list) {
                // $no++;
                $row = [];
                $row[] = $list->id;
                $row[] = $list->nama_lengkap;
                $row[] = $list->jenis_kelamin;
                $row[] = $list->alamat;
                $row[] = $list->jabatan;
                $row[] = $list->tahun_masuk;

                $data[] = $row;
            }

            $output = [
                'draw' => $request->getPost('draw'),
                'recordsTotal' => $pegawaiModel->countAll(),
                'recordsFiltered' => $pegawaiModel->countFiltered(),
                'data' => $data
            ];

            return json_encode($output);
        }
    }
}   
