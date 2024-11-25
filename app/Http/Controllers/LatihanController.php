<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //methode/function : kebisaan
    // visibilisasi : public, private, static

    public function index()
    {
        return "Halo kami sedang belajar laravel";
    }

    public function edit($id)
    {
        return "Ini adalah form edit dengan nama params:" . $id;
    }

    public function delete($id)
    {
        return "ini adalah form delete dengan id:" . $id;
    }
}
