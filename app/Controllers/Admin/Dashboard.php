<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
        );
        // return view('admin/dashboard', $data);
        return view('admin/aboutPage/manage-page-title', $data);
        // return view('admin/dashboard', $data);
    }
}
