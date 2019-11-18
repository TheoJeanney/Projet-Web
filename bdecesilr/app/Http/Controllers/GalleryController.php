<?php

namespace App\Http\Controllers;
use Illuminate\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Likelibrary;
use App\Commentlibrary;
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
        $posts = Post::orderBy('id_posts','desc')->get();
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
    //display for the gallery , library.
    public function show($id)
    {

        $likePost = Post::find($id);  
        $likeCtr = DB::table('likeslibrary')->where('post_id',$likePost->id_posts)->count();

        $comments = DB::table('users')
            ->join('commentlibrary', 'users.Id_user', '=', 'commentlibrary.user_id')
            ->join('posts', 'commentlibrary.post_id', '=', 'posts.id_posts')
            ->select('users.User_firstname', 'commentlibrary.*')
            ->where(['posts.id_posts' => $id])
            ->get();

        $post = Post::find($id);
        return view('gallery.library',['comments'=>$comments, 'likeCtr' => $likeCtr])->with('post', $post);;
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

    //Remove a comment on the gallery page 
    public function deleteComment($id){
        $comment= Commentlibrary::find($id);
        $comment_id=$comment->post_id;
        $comment->delete();
        return redirect("/library/$comment_id")->with('success', 'Post supprimé');  
    }

    //Put a comment on the gallery page
    public function comment(Request $request, $id_posts){

        $this->validate($request, [
            'comment' => 'required',
        ]);
        $comment = new Commentlibrary; 
        $comment->user_id = Auth::id();

        $comment->post_id = $id_posts;
        $comment->comment = $request->input('comment');

        $comment->save();
        return redirect("/library/$id_posts")->with('response', 'Comment Added Successfully');
    }
//Add a like to the gallery
    public function like($id){
        $loggedin_user = Auth::user()->Id_user;

        $like_user = Likelibrary::where(['user_id' => $loggedin_user, 'post_id' => $id])->first();

        if(empty($like_user->user_id)){
            $user_id = Auth::user()->Id_user;
            $post_id = $id;
    
            $like = new Likelibrary;
            $like->user_id = $user_id;
            $like->post_id = $post_id;
            $like->save();
            return redirect("/library/$id");
        }
        else{
            DB::delete('DELETE FROM likeslibrary WHERE user_id = ?',[Auth::user()->Id_user]);
            return redirect("/library/$id");
        }
    }
}