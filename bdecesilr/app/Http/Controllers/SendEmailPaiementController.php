<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailPaiement;
use DB;
//Send email for payement 
class SendEmailPaiementController extends Controller
{
    //
    function index() {
        return view('pages.shop');
    }

    function send() {

        Mail::to('maxim.wilmot@viacesi.fr')->send(new SendMailPaiement());
        return back()->with('success', 'Merci de nous avoir contactés! Nous reviendrons vers vous dès que possible.');

    }

}
?>
