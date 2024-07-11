<?php
namespace App\Controllers;

use App\Models\TodoModel;

class Todo extends BaseController
{
    protected TodoModel $model;

    public function __construct()
    {
        $this->model = new TodoModel();
    }


    public function index()
    {
        $all = $this->model->orderBy('id', 'desc')->findAll();
        $data = ['todo' => $all];
        return view('todo', $data);
    }

    public function tambah()
    {
        $data = $this->request->getPost(['nama', 'selesai']);
        $data['selesai'] = $data['selesai'] === 'on' ? 1 : 0;
        $this->model->insert($data);
        return redirect()->to(base_url());
    }

    public function edit($id)
    {
        $data = $this->request->getPost(['nama', 'selesai']);
        $data['selesai'] = $data['selesai'] === 'on' ? 1 : 0;
        $this->model->update($id, $data);
        return redirect()->to(base_url());
    }

    public function hapus($id)
    {
        $this->model->delete($id);
        return redirect()->to(base_url());
    }
}