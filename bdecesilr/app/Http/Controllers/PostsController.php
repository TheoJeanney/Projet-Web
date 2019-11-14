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
        $posts = Post::orderBy('id_posts','desc')->get();

        return view('posts.index')->with('posts', $posts);
    }

    /** 
     * 
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('posts.create');
    }

    /** 
     * @param \Illuminate\Http\Request $request 
     * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'web_image'=> 'image|nullable|max:1999'
        ]);
        //
        if($request->hasFile('web_image')){
            //Filename with extension
            $filenameYExt = $request->file('web_image')->getClientOriginalName();
            //Filename without extension
            $filenameNExt = pathinfo($filenameYExt, PATHINFO_FILENAME);
            //Extension
            $extension = $request->file('web_image')->getClientOriginalExtension();
            //Filename store
            $filenameStore = $filenameNExt.'_'.time().'.'.$extension;
            //Upload
            $path = $request->file('web_image')->storeAs('public/web_image', $filenameStore);
        } else {
            $filenameStore = "noimage.jpg";
        }
        //Create an event
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->web_image = $filenameStore;
        $post->save();

        return redirect('/Posts')->with('success', 'Post envoyé');
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
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
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

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'web_image'=> 'image|nullable|max:1999'
        ]);
        //
        if($request->hasFile('web_image')){
            //Filename with extension
            $filenameYExt = $request->file('web_image')->getClientOriginalName();
            //Filename without extension
            $filenameNExt = pathinfo($filenameYExt, PATHINFO_FILENAME);
            //Extension
            $extension = $request->file('web_image')->getClientOriginalExtension();
            //Filename store
            $filenameStore = $filenameNExt.'_'.time().'.'.$extension;
            //Upload
            $path = $request->file('web_image')->storeAs('public/web_image', $filenameStore);
        } else {
            $filenameStore = "noimage.jpg";
        }
        //Create an event
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->web_image = $filenameStore;
        $post->save();

        return redirect('/Posts')->with('success', 'Post changé');
    }
    
    /**
     * Remove the specified resource from storage.
     *  
     * @param int $id 
     * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/Posts')->with('success', 'Post supprimé');
    }

}   