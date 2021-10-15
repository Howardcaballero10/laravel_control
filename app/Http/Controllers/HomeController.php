<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        return view('auth.login');
        //return "Esto es la pagina home";
    }
}
