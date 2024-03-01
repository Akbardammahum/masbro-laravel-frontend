<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data extends Controller
{
    public function index()
    {
        return view('page.data');
    }
}
