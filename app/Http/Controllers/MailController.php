<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function getMail(Request $request){
     
     $contenido= request()->validate([

         'name'=>'required',
         'email'=>'required',
         'subjet'=>'required',
         'mensaje'=>'required',
        ]);

       Mail::to('blinkparana@gmail.com')->send(new ContactMail($contenido));

      
    }
}
