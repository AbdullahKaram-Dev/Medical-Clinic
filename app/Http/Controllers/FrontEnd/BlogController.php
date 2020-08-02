<?php

namespace App\Http\Controllers\FrontEnd;

use App\About;
use App\Blog;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function __invoke()
    {
        $about = About::first();
        $posts = Blog::paginate(paginate);
        return view('front.blog.posts',compact('posts','about'));
    }

    public function singlePost($id)
    {
        $about = About::first();
        $post = Blog::findOrFail($id);
        return view('front.blog.single-post',compact('about','post'));
    }
}
