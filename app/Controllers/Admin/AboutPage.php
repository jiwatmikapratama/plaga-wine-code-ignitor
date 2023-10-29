<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AboutPage extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'About Page',
        );

        return view('admin/aboutPage/manage-about-page', $data);
    }
}
