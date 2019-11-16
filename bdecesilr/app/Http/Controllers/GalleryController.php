<?php

namespace App\Http\Controllers;
use Illuminate\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Like;
use App\Comment;
use Auth;
use App\User;   
use DB;
use App\Signin;

class GalleryController extends Controller
{

    /** 
     * 
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('gallery.galgal');
    }

    /** 
     * 
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        
        return view('gallery.create');
    }

    /** 
     * @param \Illuminate\Http\Request $request 
     * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        
    }

    /**
     * @param int $id 
     * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $post = Post::find($id);
        return view('gallery.library');
    }
    

    /** 
     * @param int $id 
     * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        
    }
    
    /**
     * Remove the specified resource from storage.
     *  
     * @param int $id 
     * @return \Illuminate\Http\Response
    */
    public function destroy($id){

    }

    public function comment(Request $request, $id_posts){

    }

    public function like($id){

    }

    public function inscript($id){

}

public function disinscript($id){

}
}