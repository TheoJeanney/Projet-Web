<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    public function register() {
        return view('pages.register');
    }
    public function connexion() {
        return view('pages.connexion');
    }
    public function test() {
        return view('pages.test');
    }
    public function condition(){
        return view('pages.condition');
    }
    public function shop(){
        return view('pages.shop');
    }
    public function activity(){
        return view('pages.activity');
    }
    public function boite(){
        return view('pages.boite');
    }
}
