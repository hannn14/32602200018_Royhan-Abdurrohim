<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FormController extends BaseController
{
    public function submitForm()
    {
        // Ambil data dari request
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matakuliah = $this->request->getPost('matakuliah');
        $dosen = $this->request->getPost('dosen');
        $asisten = $this->request->getPost('asisten');

        // Lakukan sesuatu dengan data yang diterima
        // Misalnya, tampilkan data tersebut
        return view('result', compact('nama', 'nim', 'kelas', 'matakuliah', 'dosen', 'asisten'));
    }

    public function about(){
        return view('about');
    }

    public function profile(){
        return view('profile');
    }
}

?>
