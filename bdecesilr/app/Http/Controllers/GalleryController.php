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
    public function show($id)
    {

        $likePost = Post::find($id);  
        $likeCtr = DB::table('likes')->where('post_id',$likePost->id_posts)->count();

        $comments = DB::table('users')
            ->join('comments', 'users.Id_user', '=', 'comments.user_id')
            ->join('posts', 'comments.post_id', '=', 'posts.id_posts')
            ->select('users.User_firstname', 'comments.*')
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

    public function deleteComment($id){
        $comment= Comment::find($id);
        $comment_id=$comment->post_id;
        $comment->delete();
        return redirect("/library/$comment_id")->with('success', 'Post supprimé');  
    }

    public function comment(Request $request, $id_posts){

        $this->validate($request, [
            'comment' => 'required',
        ]);
        $comment = new Comment; 
        $comment->user_id = Auth::id();

        $comment->post_id = $id_posts;
        $comment->comment = $request->input('comment');

        $comment->save();
        return redirect("/library/$id")->with('response', 'Comment Added Successfully');
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
            return redirect("/library/$id");
        }
        else{
            DB::delete('DELETE FROM likes WHERE user_id = ?',[Auth::user()->Id_user]);
            return redirect("/library/$id");
        }
    }
}