<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Events\PostCreate;

class PostController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $posts = Post::get();

        return view('admin.post.list', compact('posts'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             'title' => 'required',
             'body' => 'required'
        ]);
   
        $post = Post::create([
            'admin_id' => auth('admin')->user()->id,
            'title' => $request->title,
            'body' => $request->body
        ]);

        event(new PostCreate($post));
   
        return back()->with('success','Post created successfully.');
    }
}
