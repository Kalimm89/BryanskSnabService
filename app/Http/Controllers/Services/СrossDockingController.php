<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class СrossDockingController extends Controller
{
    public function index() {
        return view('uslugi.cross-docking');
     }
}
