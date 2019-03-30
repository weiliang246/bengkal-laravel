<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiangContsoller extends Controller
{
    public function index()
    {
        return view('liang');
    }
}
