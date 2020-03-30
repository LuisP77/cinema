<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;
use Session;
use Redirect;

class EmailController extends Controller
{

    public function send_mail(Request $request)
    {
        return new \App\Mail\ContactMail($request); //Render Mail

        //Mail::to('lpierluissi@hotmail.com')->send(new \App\Mail\ContactMail($request)); //Send through ContactMail mail controller

        /*Mail::send('emails.contact', $request->all(), function($msj){      //Send through this controller
            $msj->subject('INFO');
            $msj->to('lpierluissi@gmail.com');
        });*/

        Session::flash('message','Email enviado correctamente.');
        return redirect('/contact');
    }

}
