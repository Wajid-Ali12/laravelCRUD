<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost()
    {
        return view('add-post');
    }
    public function editPost()
    {

        return view('edit-post');
    }
    public function createPost(Request $request)
    {
        $data = request()->validate([

            'name' => 'required',
            'email' => 'required|email',
            'password' =>  'required|min:6',
            'active' => 'required',

        ]);
        $post = new Post();
        $post->name = $request->name;
        $post->email = $request->email;
        $post->password = $request->password;
        $post->active = $request->active;
        $post->save();
        return redirect('/posts');
    }
    public function displayPosts()
    {
        $post = Post::where('active', 1)->get();
        $psot = Post::where('active', 0)->get();
        $posts = Post::all();
        return view('posts', ['posts' => $posts]);
    }

    public function deletePost($id)
    {
        Post::where('id', $id)->delete();
        return redirect('/posts');
    }
    public function updatePost(Request $request)
    {
        $post = Post::where('id', $request->id)->first();
        $post->name = $request->name;
        $post->email = $request->email;
        $post->password = $request->password;
        $post->save();
        return redirect('/posts')->with('success', "Post Updated Successfully....!!!");
    }

    public function updateForm($id)
    {
        $post = Post::where('id', $id)->first();
        return view('edit-post', ['post' => $post]);
    }
}
