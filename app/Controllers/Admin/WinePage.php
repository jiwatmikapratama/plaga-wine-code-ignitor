<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class WinePage extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Wine Page',
        );

        return view('admin/winePage/manage-wine-page', $data);
    }
}
