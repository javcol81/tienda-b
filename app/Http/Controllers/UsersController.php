<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Codigo;
use App\Http\Requests\CreateFormRequest;
use App\PaymentPlatform;
use App\Currency;

class UsersController extends Controller
{
    //

    public function __construct()
    {
        
    }
  
    public function welcome()
    {
       
        return view('welcome');
    }
    public function login()
    {
       
        return view('login');
    }


    public function Modelo()
    {
       
        return view('comercios.Modelo');
    }


    public function Pacifico()
    {
       
        return view('comercios.Pacifico');
    }
    
    public function Abuela()
    {
       
        return view('comercios.Abuela');
    }

    public function Ceferino()
    {
       
        return view('comercios.Ceferino');
    }

    public function Ego()
    {
       
        return view('comercios.Ego');
    }

    public function Juan()
    {
       
        return view('comercios.Juan');
    }


    public function Picolino()
    {
       
        return view('comercios.Picolino');
    }

    public function Miga()
    {
       
        return view('comercios.Miga');
    }
    public function compra()
    {
       
        return view('template.compra');
    }
   

    public function index()
    {
        $currencies = Currency::all();
        $paymentPlatforms = PaymentPlatform::all();

        return view('template.tarjeta')->with([
            'currencies' => $currencies,
            'paymentPlatforms' => $paymentPlatforms,
        ]);
    }



   
   
    public function evento(Request $request)
    {
       
      
            return view('template.evento');
      
}
      


    public function evento2(Request $request)
    {
       
        $codigos = Codigo::where('numero', $request->input('numero'))->count();

        if($codigos > 0)
        {
            return view('template.evento2');
        }
        else
        echo "<script type='text/javascript'>alert('EL código NO es correcto');
        
        </script>";

        return view('template.evento');
       
    
       
}



}