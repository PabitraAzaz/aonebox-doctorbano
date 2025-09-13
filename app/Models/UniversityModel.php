<?php

namespace App\Models;

use CodeIgniter\Model;

class UniversityModel extends Model
{
    protected $table      = 'universities'; // Table name
    protected $primaryKey = 'uni_id';       // Primary key

    protected $useAutoIncrement = true;

    // Fields allowed for insert/update
    protected $allowedFields = [
        'uni_name',
        'description',
        'overview',
        'about',
        'facilities',
        'faculties',
        'eligibility',
        'document_criteria',
        'admission_procedures',
        'departments',
        'why_choose_us',
        'conclusion',

        // 🎓 Program & Stats
        'bachelors_programs',
        'masters_programs',
        'specialist_programs',
        'phd_programs',
        'english_taught_programs',
        'majors',
        'students',
        'departments_count',
        'institutions_count',

        // 📋 Eligibility – IFP
        'eligibility_ifp_standard',
        'eligibility_ifp_percentage',
        'eligibility_ifp_boards',

        // 📋 Eligibility – Undergraduate
        'eligibility_ug_standard',
        'eligibility_ug_percentage',
        'eligibility_ug_boards',

        // 📋 Eligibility – Postgraduate
        'eligibility_pg_standard',
        'eligibility_pg_percentage',
        'eligibility_pg_boards',

        // 📝 IELTS Requirements
        'ielts_undergraduate',
        'ielts_postgraduate',
        'ielts_phd',

        // ⏱️ Timestamps
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // Auto-manage timestamps
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}