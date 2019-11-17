<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailPaiement;
use App\Http\Controllers\Auth;
use DB;

class SendEmailPaiementController extends Controller
{
    function index() {
        return view('pages.contact');
    }

    function send($user) {

        $user = Auth::user();

        $data = array('name'=>"$user->User_firstname");
        Mail::to('maxim.wilmot@viacesi.fr')->send(new SendMail($data));
        return back()->with('success', 'Merci de nous avoir contactés! Nous reviendrons vers vous dès que possible.');

    }

}
?>
