<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class defController extends Controller
{
    public function index()
    {
        return view('main.index');
    }
}
