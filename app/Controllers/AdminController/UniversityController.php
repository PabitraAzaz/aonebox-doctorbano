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
            'document_criteria'     => $this->request->getPost('document_criteria'),
            'admission_procedures'  => $this->request->getPost('admission_procedures'),
            'departments'           => $this->request->getPost('departments'),
            'why_choose_us'         => $this->request->getPost('why_choose_us'),
            'conclusion'            => $this->request->getPost('conclusion'),

            // Counters
            'bachelors_programs'    => $this->request->getPost('bachelors_programs'),
            'masters_programs'      => $this->request->getPost('masters_programs'),
            'specialist_programs'   => $this->request->getPost('specialist_programs'),
            'phd_programs'          => $this->request->getPost('phd_programs'),
            'english_taught_programs' => $this->request->getPost('english_taught_programs'),
            'majors'                => $this->request->getPost('majors'),
            'students'              => $this->request->getPost('students'),
            'departments_count'     => $this->request->getPost('departments_count'),
            'institutions_count'    => $this->request->getPost('institutions_count'),

            // Eligibility
            'eligibility_ifp_standard'   => $this->request->getPost('eligibility_ifp_standard'),
            'eligibility_ifp_percentage' => $this->request->getPost('eligibility_ifp_percentage'),
            'eligibility_ifp_boards'     => $this->request->getPost('eligibility_ifp_boards'),

            'eligibility_ug_standard'    => $this->request->getPost('eligibility_ug_standard'),
            'eligibility_ug_percentage'  => $this->request->getPost('eligibility_ug_percentage'),
            'eligibility_ug_boards'      => $this->request->getPost('eligibility_ug_boards'),

            'eligibility_pg_standard'    => $this->request->getPost('eligibility_pg_standard'),
            'eligibility_pg_percentage'  => $this->request->getPost('eligibility_pg_percentage'),
            'eligibility_pg_boards'      => $this->request->getPost('eligibility_pg_boards'),

            // IELTS
            'ielts_undergraduate'   => $this->request->getPost('ielts_undergraduate'),
            'ielts_postgraduate'    => $this->request->getPost('ielts_postgraduate'),
            'ielts_phd'             => $this->request->getPost('ielts_phd'),
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
            'document_criteria'     => $this->request->getPost('document_criteria'),
            'admission_procedures'  => $this->request->getPost('admission_procedures'),
            'departments'           => $this->request->getPost('departments'),
            'why_choose_us'         => $this->request->getPost('why_choose_us'),
            'conclusion'            => $this->request->getPost('conclusion'),

            // Counters
            'bachelors_programs'    => $this->request->getPost('bachelors_programs'),
            'masters_programs'      => $this->request->getPost('masters_programs'),
            'specialist_programs'   => $this->request->getPost('specialist_programs'),
            'phd_programs'          => $this->request->getPost('phd_programs'),
            'english_taught_programs' => $this->request->getPost('english_taught_programs'),
            'majors'                => $this->request->getPost('majors'),
            'students'              => $this->request->getPost('students'),
            'departments_count'     => $this->request->getPost('departments_count'),
            'institutions_count'    => $this->request->getPost('institutions_count'),

            // Eligibility
            'eligibility_ifp_standard'   => $this->request->getPost('eligibility_ifp_standard'),
            'eligibility_ifp_percentage' => $this->request->getPost('eligibility_ifp_percentage'),
            'eligibility_ifp_boards'     => $this->request->getPost('eligibility_ifp_boards'),

            'eligibility_ug_standard'    => $this->request->getPost('eligibility_ug_standard'),
            'eligibility_ug_percentage'  => $this->request->getPost('eligibility_ug_percentage'),
            'eligibility_ug_boards'      => $this->request->getPost('eligibility_ug_boards'),

            'eligibility_pg_standard'    => $this->request->getPost('eligibility_pg_standard'),
            'eligibility_pg_percentage'  => $this->request->getPost('eligibility_pg_percentage'),
            'eligibility_pg_boards'      => $this->request->getPost('eligibility_pg_boards'),

            // IELTS
            'ielts_undergraduate'   => $this->request->getPost('ielts_undergraduate'),
            'ielts_postgraduate'    => $this->request->getPost('ielts_postgraduate'),
            'ielts_phd'             => $this->request->getPost('ielts_phd'),
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
