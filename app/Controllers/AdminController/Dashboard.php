<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index() {
            return view('admin/dashboard');
    }
}