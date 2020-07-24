<?php

namespace App\Http\Controllers\BackEnd;

use App\Doctor;
use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\Store;
use function GuzzleHttp\Promise\all;


class DoctorController extends Controller
{
    public function __invoke()
    {
        $doctors = Doctor::paginate(paginate);
        return view('back.doctors.all-doctors',compact('doctors'));
    }

    public function addNewDoctorForm()
    {
        return view('back.doctors.add-doctors');
    }

    public function addNewDoctor(Store $store)
    {
        $imageName = request('avatar')->store('doctors/avatars');
        Doctor::create([

            'name'=>$store['name'],
            'title_jop'=>$store['title_jop'],
            'email'=>$store['email'],
            'avatar'=>$imageName,
            'facebook_link'=>$store['facebook_link'],
            'twitter_link'=>$store['twitter_link'],
            'linked-in_link'=>$store['linked-in_link'],
            'mobile_number'=>$store['mobile_number'],
            'status'=>$store['status']
        ]);

        alert()->success('New Doctor Added Successfully','Success');
        return back();

    }

    public function deleteDoctor($name)
    {
        if(isset($name)){

            Doctor::where('name',$name)->delete();

            alert()->success('Doctor Removed Successfully','Success');
            return back();

        }else{

            alert()->error('Doctor Not Found','Error');
            return back();
        }

    }
}
