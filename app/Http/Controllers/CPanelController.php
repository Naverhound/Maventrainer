<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CPanelController extends Controller
{
    public function index()
    {
        # code...
        return view('cpanel.cpanel');
    }
}
