<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //
    public function addPost(){
        return view('addPost');
    }

    public function saveData(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        echo "Data Saved Succesfully";
    }

    public function getPost(){
        $posts = Post::orderBy('id','DESC')->get();
        return view('posts',compact('posts'));
    }

    public function getPostById($id){
        $post = Post::where('id',$id)->first();
        // echo $post;
        return view('singlepost',compact('post'));
    }

    public function deletePost($id){
        Post::where('id',$id)->delete();
        return back();
    }

    public function editPost($id){
        $post = Post::find($id);
        // echo $post;
        return view('editpost',compact('post'));
    }

    public function updatePost(Request $request){
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back();
    }

}

