<?php
namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index()
    {
        $model = new ContactModel();
        $data['contacts'] = $model->findAll();

        return view('contact/index', $data);
    }

    public function create()
    {
        return view('contact/create');
    }

    public function store()
    {
        $model = new ContactModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message')
        ];

        $model->insert($data);
        return redirect()->to('/contact');
    }

    public function delete($id)
    {
        $model = new ContactModel();
        $model->delete($id);
        return redirect()->to('/contact');
    }
}
