<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /** 
     * 
     * @return \Illuminate\Http\Response
    */
    public function index()
    {

    }
    /** 
     * 
     * @return \Illuminate\Http\Response
    */
    public function create()
    {

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
        return view('posts.show')->with('post', $post);

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
     * @param \Illuminate\Http\Request $request
     * @param int $id 
     * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {

    }
    
    /**
     * Remove the specified resource from storage.
     *  
     * @param int $id 
     * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {

    }
}   