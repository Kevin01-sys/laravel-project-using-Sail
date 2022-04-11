<?php
/* php artisan make:controller ContactanosController */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    /* shows the form to fill in to send an e-mail */
    public function index(){
        return view ('contactanos.index');
    }

    public function store(Request $request){
        //return $request;

        /* the data entered in the form are validated */
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        /* the mail to be sent is created */
        $correo = new ContactanosMailable($request->all());
        Mail::to('test@mailhog.local')->send($correo);
        /* redirects to the path, creating and sending the session variable 'info' */
        return redirect()->route('contactanos.index')->with('info','Mensaje enviado');
        //return "mensaje enviado";
    }
}
