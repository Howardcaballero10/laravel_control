<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function create(){
        return view('admin.create');
    }

    public function delete(){
        return view('admin.delete');
    }
}
