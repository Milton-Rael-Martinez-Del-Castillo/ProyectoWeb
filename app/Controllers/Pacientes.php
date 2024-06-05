<?php namespace App\Controllers;

use App\Models\PacienteModel;

class Pacientes extends BaseController
{
    public function index()
    {
        $model = new PacienteModel();
        $data['pacientes'] = $model->findAll();
        echo view('pacientes/index', $data);
    }

    public function create()
    {
        echo view('pacientes/create');
    }

    public function store()
    {
        $model = new PacienteModel();
        $model->save($this->request->getPost());
        return redirect()->to('/pacientes');
    }

    public function edit($id)
    {
        $model = new PacienteModel();
        $data['paciente'] = $model->find($id);
        echo view('pacientes/edit', $data);
    }

    public function update($id)
    {
        $model = new PacienteModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to('/pacientes');
    }

    public function delete($id)
    {
        $model = new PacienteModel();
        $model->delete($id);
        return redirect()->to('/pacientes');
    }
}
