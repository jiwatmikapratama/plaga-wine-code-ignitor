<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('admin/login', $data);
    }
}
