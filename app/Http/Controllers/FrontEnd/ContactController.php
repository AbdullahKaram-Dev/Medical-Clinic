<?php

namespace App\Http\Controllers\FrontEnd;

use App\About;
use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke()
    {
        $about = About::first();
        return view('front.contact.contact-us',compact('about'));
    }

    public function store(Request $request)
    {
        $attribute = $request->validate([
           'message'=>['required','string','max:400'],
           'name'=>['required','string','max:100'],
           'email'=>['required','string','max:100','email'],
           'subject'=>['required','string','max:100']
        ]);
        Contact::create($attribute);
        session()->flash('success','YOUR MESSAGE RECEIVED SUCCESSFULLY SOON WE CALL BACK YOU');
        return back();
    }
}
