<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Comment;

class MailController extends Controller {

    public function signaler_email() {
                
        $user = Auth::user();
        $com=DB::select('SELECT comment FROM comments WHERE '.$user->Id_user.' = comments.user_id')[0]->comment;
        $sendE=DB::select('SELECT * FROM users WHERE Id_status="2"');
        $data = array('name'=>"$user->User_firstname", 'com'=>"$com");
        $result = DB::query($sendE);

        while ($row = $result) {
            Mail::send('mail', $data, function($message) {

                mail($row['email'],$email_subject,$email_message);
                //$message->to('maxim.wilmot@viacesi.fr')->subject('Contenu inapproprié');
                //$message->from('mwukfr@gmail.com','Personnel CESI');
            
            });
        }
        echo "Commentaire signalé";

    }
    }

/**
    public function idee_email() {
                
        $user = Auth::user();
        $com=DB::select('SELECT comment FROM comments WHERE '.$user->Id_user.' = comments.user_id')[0]->comment;
        $data = array('name'=>"$user->User_firstname", 'com'=>"$com");

        Mail::send('mail', $data, function($message) {

            $message->to('maxim.wilmot@viacesi.fr')->subject('Contenu inapproprié');
            $message->from('mwukfr@gmail.com','Personnel CESI');
        
        });

        echo "Idée soumise";

    }
*/

?>
