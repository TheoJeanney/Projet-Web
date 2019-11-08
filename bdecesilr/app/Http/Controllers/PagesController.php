<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    public function inscription() {
        return view('pages.inscription');
    }
    public function connexion() {
        return view('pages.connexion');
    }
}
