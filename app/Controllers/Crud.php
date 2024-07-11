<?php
namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new MahasiswaModel();
    }

    
    public function index()
    {
        $all = $this->model->findAll();
        $data = [
        'mahasiswa' => $all
        ];
        return view('crud/view', $data);
    }

   
    public function tambah()
    {
        if (isset($_POST['nim'])) {
            $data = $this->request->getPost([
                'nim',
                'nama',
                'prodi',
                'universitas',
                'nomor_handphone'
            ]);
            $this->model->insert($data);
            return redirect()->to(base_url('/crud'));
        } else {
            return view('crud/upload');
        }
    }

    public function edit($id)
    {
        if (isset($_POST['nim'])) {
            $data = $this->request->getPost([
                'nim',
                'nama',
                'prodi',
                'universitas',
                'nomor_handphone'
            ]);
            $this->model->update($id, $data);
            return redirect()->to(base_url('/crud'));
        } else {
            $data = ['data' => $this->model->find($id)];
            return view('crud/edit', $data);
        }
    }

    public function hapus($id)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('/crud'));
    }
}