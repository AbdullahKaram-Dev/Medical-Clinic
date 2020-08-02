<?php

namespace App\Http\Controllers\FrontEnd;

use App\About;
use App\Department;
use App\Http\Controllers\Controller;


class DepartmentController extends Controller
{
    public function __invoke()
    {
        $about = About::first();
        $departments = Department::paginate(paginate);
        return view('front.departments.departments',compact('departments','about'));

    }
}
