<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Keuangan extends Controller
{
    public function index()
    {
        return view('page.keuangan');
    }
}
