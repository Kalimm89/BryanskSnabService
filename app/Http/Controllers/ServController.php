<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServController extends Controller
{
    public function index() {
        return view('uslugi.services');
     }
}
