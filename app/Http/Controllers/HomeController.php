<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
       $questions = DB::table('questions')->orderBy('id')->simplePaginate(20);
    //    dd($questions);
       return view('welcome', compact('questions'));
    }
}
