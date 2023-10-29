<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ShopPage extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Shop Page',
        );

        return view('admin/shopPage/manage-shop-page', $data);
    }
}
