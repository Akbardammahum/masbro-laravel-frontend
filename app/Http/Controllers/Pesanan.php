<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pesanan extends Controller
{
    public function index()
    {
        return view('page.pesanan');
    }
}