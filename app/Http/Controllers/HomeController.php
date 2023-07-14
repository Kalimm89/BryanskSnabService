<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\UserMail;
use App\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index() {
       $questions = DB::table('questions')->orderBy('id')->simplePaginate(20);
       return view('welcome', compact('questions'));
    }

    public function сonsultation(Request $request) {
      if ($request->method() == 'POST') {
          $body = "<p><b>Имя:</b>{$request->input('name')}</p><br>";
          $body .= "<p><b>Телефон:</b>{$request->input('tel')}</p><br>";
          $body .= "<p><b>Организация:</b>{$request->input('organ')}</p>";

          Mail::to('kalimm89@gmail.com')->send(new UserMail($body));
          $request->session()->flash('success', 'Письмо отправленно');
          return redirect()->back();
      }
      return redirect()->back();
   }
   public function mailing(Request $request) {
      if ($request->method() == 'POST') {
          $footer = "<p><b>Почта для отправки рассылки:</b>{$request->input('email')}</p><br>";

          Mail::to('kalimm89@gmail.com')->send(new Mailer($footer));
          $request->session()->flash('success', 'Письмо отправленно');
          return redirect()->back();
      }
      return redirect()->back();
   }
}
