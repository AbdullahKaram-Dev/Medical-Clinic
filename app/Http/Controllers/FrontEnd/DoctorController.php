<?php

namespace App\Http\Controllers\FrontEnd;

use App\About;
use App\Doctor;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function __invoke()
    {
        $about = About::first();
        $doctors = Doctor::paginate(paginate);
        return view('front.doctors.doctors',compact('about','doctors'));
    }
}
