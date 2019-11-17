<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailPaiement;

class SendEmailPaiementController extends Controller
{
    function index() {
        return view('pages.contact');
    }

    function send(Request $request) {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);
        $data = array( 
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message
        );
        Mail::to('maxim.wilmot@viacesi.fr')->send(new SendMail($data));
        return back()->with('success', 'Merci de nous avoir contactés! Nous reviendrons vers vous dès que possible.');

    }

}   
?>