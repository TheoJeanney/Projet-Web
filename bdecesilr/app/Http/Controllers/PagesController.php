<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    public function test() {
        return view('pages.test');
    }
    public function condition(){
        return view('pages.condition');
    }
    public function shopw(){
        return view('pages.shopw');
    }
    public function activity(){
        return view('pages.activity');
    }
    public function boite(){
        return view('pages.boite');
    }
    public function mention(){
        return view('pages.mention');
    }
    public function contact(){
        return view('pages.contact');
    }
}
