<?php

namespace App\Http\Controllers;

use App\Mail\UserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send() {
        Mail::to('kalimm@bk.ru')->send(new UserMail());
        session()->flash('success', 'Письмо отправленно');
        // return view('welcome', compact('questions'));
     }
}
