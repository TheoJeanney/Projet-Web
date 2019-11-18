<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//List every pages
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
    public function boite(){
        return view('pages.boite');
    }
    public function mention(){
        return view('pages.mention');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function admin(){
        return view('pages.admin');
    }
    public function account(){
        return view('pages.account');
    }
    public function register() {
        return view('pages.register');
    }
}
