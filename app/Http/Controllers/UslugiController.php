<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UslugiController extends Controller
{
    public function index() {
        return view('uslugi.index');
     }
}
