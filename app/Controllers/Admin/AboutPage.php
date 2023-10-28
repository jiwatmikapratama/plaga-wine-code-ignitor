<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ShopPage extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Shop Page | Manage Page',
        );
        return view('admin/dashboard', $data);
    }

    public function manage_title()
    {
        $data = array(
            'title' => 'Shop Page | Manage Page',
        );

        return view('admin/aboutPage/manage-page-title', $data);
    }
}
