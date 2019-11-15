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

class ActiController extends Controller
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
        $likePost = Post::find($id);  
        //return $likePost;
        $likeCtr = DB::table('likes')->where('post_id',$likePost->id_posts)->count();
        //exit();
        $comments = DB::table('users')
            ->join('comments', 'users.Id_user', '=', 'comments.user_id')
            ->join('posts', 'comments.post_id', '=', 'posts.id_posts')
            ->select('users.User_firstname', 'comments.*')
            ->where(['posts.id_posts' => $id])
            ->get();

        $post = Post::find($id);
        return view('posts.show',['comments'=>$comments, 'likeCtr' => $likeCtr])->with('post', $post);

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
     * @param int $id 
     * @return \Illuminate\Http\Response
    */
    public function photos($id)
    {
        $post = Post::find($id);
        return view('posts.photos')->with('post', $post);
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

    public function comment(Request $request, $id_posts){

        $this->validate($request, [
            'comment' => 'required',
            'comment_image'=>'required|image'
        ]);

        if($request->hasFile('comment_image')){
            //Filename with extension
            $filenameYExt = $request->file('comment_image')->getClientOriginalName();
            //Filename without extension
            $filenameNExt = pathinfo($filenameYExt, PATHINFO_FILENAME);
            //Extension
            $extension = $request->file('comment_image')->getClientOriginalExtension();
            //Filename store
            $filenameStore = $filenameNExt.'_'.time().'.'.$extension;
            //Upload
            $path = $request->file('comment_image')->storeAs('public/comment_image', $filenameStore);
        } else {
            $filenameStore = "noimage.jpg";
        }
        $comment = new Comment;
        $comment->user_id = Auth::id();

        $comment->post_id = $id_posts;
        $comment->comment = $request->input('comment');
        $comment->comment_image=$filenameStore;

        $comment->save();
        return redirect("/$id_posts")->with('response', 'Comment Added Successfully');
    }

    public function like($id){

        $loggedin_user = Auth::user()->Id_user;

        $like_user = Like::where(['user_id' => $loggedin_user, 'post_id' => $id])->first();
        if(empty($like_user->user_id)){
            $user_id = Auth::user()->Id_user;
            $post_id = $id;

            $like = new Like;
            $like->user_id = $user_id;
            $like->post_id = $post_id;
            $like->save();
            return redirect("/Posts/$id");
        }
        else{
            return redirect("/Posts/$id");
        }
    }
}