<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WarehouseRentController extends Controller
{
    public function index() {
        return view('uslugi.warehouse-rent');
     }
}
