<?php

namespace App\Http\Controllers\BackEnd;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __invoke()
    {
        $posts = Blog::paginate(paginate);
        return view('back.blog.all-posts',compact('posts'));
    }


    public function addNewPostForm()
    {
        return view('back.blog.add-post');
    }

    public function addNewPost(Request $request)
    {
        $attribute = $request->validate([
           'title'=>['string','required','max:50'],
           'description'=>['string','required','max:400'],
           'avatar'=>['image','required'],
        ]);

        if(isset($request->avatar)){

           $imageName = $request->avatar->store('post/avatars');
           $attribute['avatar'] = $imageName;
        }
         Blog::create($attribute);
        alert()->success('Post Added Successfully','Success');
        return back();
    }

    public function deletePost($id)
    {
        $delete = Blog::findOrFail($id);
        $delete->delete();
        alert()->success('Post Id '.'('.$delete->id.')'.' Deleted Successfully','Success');
        return back();
    }

    public function editPost($id)
    {
        $post_data = Blog::findOrFail($id);
        return view('back.blog.edit',compact('post_data'));
    }

    public function updatePost($id,Request $request){

        $attribute = $request->validate([
           'title'=>['required','string','max:50'],
           'description'=>['required','string','max:400'],
           'avatar'=>['image'],
        ]);
        if(isset($request->avatar)){

            $imageName = $request->avatar->store('post/avatars');
            $attribute['avatar'] = $imageName;
        }
       $post = Blog::findOrFail($id);
       $post->update($attribute);
       $post->save();
        alert()->success('Post Updated Successfully','Success');
        return redirect()->route('show-all-posts');
    }
}
