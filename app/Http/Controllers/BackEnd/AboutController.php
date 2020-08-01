<?php

namespace App\Http\Controllers\BackEnd;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function __invoke()
    {
        $Abouts = About::paginate(paginate);
        return view('back.about.show-about-information',compact('Abouts'));
    }

    public function addAboutForm()
    {
        return view('back.about.add-about-information');
    }

    public function addInformationAbout(Request $request)
    {
       $attribute = $request->validate([
          'about_us'=>['required','string','between:5,250'],
          'our_mobile'=>['required','numeric'],
          'our_email'=>['required','email','between:5,50'],
          'our_facebook_link'=>['required','url','between:5,190'],
          'our_twitter_link'=>['required','url','between:5,190'],
       ]);

        About::create($attribute);
        alert()->success('About-Information Added Successfully','Success');
        return back();
    }

    public function delete($id)
    {
       $delete = About::findOrFail($id);
       $delete->delete();
        alert()->success('About-Us Information Deleted Successfully','Success');
        return back();
    }

    public function editAbout($id)
    {
        $data = About::findOrFail($id);
        return view('back.about.edit-about-information',compact('data'));
    }

    public function updateAbout($id,Request $request)
    {
        $attribute = $request->validate([
            'about_us'=>['required','string','between:5,250'],
            'our_mobile'=>['required','numeric'],
            'our_email'=>['required','email','between:5,50'],
            'our_facebook_link'=>['required','url','between:5,190'],
            'our_twitter_link'=>['required','url','between:5,190'],
        ]);
       $data = About::findOrFail($id);
       $data->update($attribute);
        alert()->success('About-Us Information Updated Successfully','Success');
        return back();
    }

}
