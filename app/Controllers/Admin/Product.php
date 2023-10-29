<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'List Product',
        );

        return view('admin/shopPage/product/list-product', $data);
    }

    public function create()
    {
        $data = array(
            'title' => 'Create Product',
        );

        return view('admin/shopPage/product/create-product', $data);
    }

    public function edit()
    {
        $data = array(
            'title' => 'Edit Product',
        );

        return view('admin/shopPage/product/edit-product', $data);
    }
}
