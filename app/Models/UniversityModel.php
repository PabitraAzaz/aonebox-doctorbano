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
