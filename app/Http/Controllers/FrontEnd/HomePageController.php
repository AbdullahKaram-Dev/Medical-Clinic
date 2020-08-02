<?php

namespace App\Http\Controllers\FrontEnd;

use App\About;
use App\Blog;
use App\Department;
use App\Doctor;
use App\Gallery;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function __invoke()
    {
        $doctors = Doctor::paginate(3);
        $posts = Blog::paginate(3);
        $about = About::first();
        $gallery = Gallery::where('status','active')->first();
        $departments = Department::paginate(6);

        return view('home',compact(
            'doctors',
                 'posts',
                    'about',
                    'gallery',
                    'departments'
        ));
    }

}
