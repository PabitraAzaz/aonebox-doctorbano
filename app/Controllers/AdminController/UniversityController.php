<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Models\UniversityModel;

class UniversityController extends BaseController
{
    public function index()
    {
        $model = new UniversityModel();
        $data['universities'] = $model->orderBy('uni_id', 'DESC')->findAll();

        return view('admin/university/index', $data);
    }

    public function create()
    {
        return view('admin/university/create');
    }

    public function save()
    {
        helper(['form', 'url']);

        // Minimal required fields; add more rules if you want to enforce them
        $rules = [
            'uni_name' => 'required|min_length[3]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()
                ->with('error', implode('<br>', $this->validator->getErrors()));
        }

        $model = new UniversityModel();

        $data = [
            'uni_name'              => $this->request->getPost('uni_name'),
            'description'           => $this->request->getPost('description'),
            'overview'              => $this->request->getPost('overview'),
            'about'                 => $this->request->getPost('about'),
            'facilities'            => $this->request->getPost('facilities'),
            'faculties'             => $this->request->getPost('faculties'),
            'eligibility'           => $this->request->getPost('eligibility'),
            'document_criteria'     => $this->request->getPost('document_criteria'),
            'admission_procedures'  => $this->request->getPost('admission_procedures'),
            'departments'           => $this->request->getPost('departments'),
            'why_choose_us'         => $this->request->getPost('why_choose_us'),
            'conclusion'            => $this->request->getPost('conclusion'),
        ];

        if ($model->save($data)) {
            return redirect()->to(base_url('admin/university'))
                ->with('success', 'University saved successfully.');
        }

        return redirect()->back()->withInput()->with('error', 'Failed to save university.');
    }

    public function edit($id)
    {
        $model = new UniversityModel();
        $university = $model->find($id);

        if (!$university) {
            return redirect()->to(base_url('admin/university'))
                ->with('error', 'University not found.');
        }

        return view('admin/university/edit', ['university' => $university]);
    }

    public function update($id)
    {
        helper(['form', 'url']);

        $rules = [
            'uni_name' => 'required|min_length[3]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()
                ->with('error', implode('<br>', $this->validator->getErrors()));
        }

        $model = new UniversityModel();
        $university = $model->find($id);

        if (!$university) {
            return redirect()->to(base_url('admin/university'))
                ->with('error', 'University not found.');
        }

        $data = [
            'uni_name'              => $this->request->getPost('uni_name'),
            'description'           => $this->request->getPost('description'),
            'overview'              => $this->request->getPost('overview'),
            'about'                 => $this->request->getPost('about'),
            'facilities'            => $this->request->getPost('facilities'),
            'faculties'             => $this->request->getPost('faculties'),
            'eligibility'           => $this->request->getPost('eligibility'),
            'document_criteria'     => $this->request->getPost('document_criteria'),
            'admission_procedures'  => $this->request->getPost('admission_procedures'),
            'departments'           => $this->request->getPost('departments'),
            'why_choose_us'         => $this->request->getPost('why_choose_us'),
            'conclusion'            => $this->request->getPost('conclusion'),
        ];

        if ($model->update($id, $data)) {
            return redirect()->to(base_url('admin/university'))
                ->with('success', 'University updated successfully.');
        }

        return redirect()->back()->withInput()->with('error', 'Failed to update university.');
    }

    public function delete($id)
    {
        $model = new UniversityModel();

        if ($model->delete($id)) {
            return redirect()->to(base_url('admin/university'))
                ->with('success', 'University deleted successfully.');
        }

        return redirect()->to(base_url('admin/university'))
            ->with('error', 'Failed to delete university.');
    }
}