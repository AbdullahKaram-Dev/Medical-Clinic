<?php

namespace App\Http\Controllers\BackEnd;

use App\Department;
use App\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class DoctorController extends Controller
{
    public function __invoke()
    {
        $doctors = Doctor::with('department')->paginate(paginate);
        return view('back.doctors.all-doctors',compact('doctors'));
    }

    public function addNewDoctorForm()
    {
        $departments = Department::select('id','name')->get();
        return view('back.doctors.add-doctors',compact('departments'));
    }

    public function addNewDoctor()
    {
        $attributes = request()->validate([

            'name'=>['required','string','between:5,50'],
            'title_jop'=>['required','string','between:5,50'],
            'email'=>['required','email','between:5,50',Rule::unique('doctors')],
            'avatar'=>['required','image'],
            'facebook_link'=>['required','url','between:5,190',Rule::unique('doctors')],
            'twitter_link'=>['required','url','between:5,190',Rule::unique('doctors')],
            'linked-in_link'=>['required','url','between:5,190',Rule::unique('doctors')],
            'mobile_number'=>['required','numeric',Rule::unique('doctors')],
            'department_id'=>['required',Rule::exists('departments','id')],
            'status'=>['required',Rule::in(['active','deactivate'])]

        ]);

        $imageName = request('avatar')->store('doctors/avatars');
        $attributes['avatar']=$imageName;
        Doctor::create($attributes);
        alert()->success('New Doctor Added Successfully','Success');
        return back();

    }

    public function deleteDoctor($id)
    {
      Doctor::findOrFail($id)->delete();
      alert()->success('Doctor Removed Successfully','Success');
      return back();
    }

    public function editDoctor($id)
    {
      $doctor = Doctor::findOrFail($id);
      return view('back.doctors.edit',compact('doctor'));
    }

    public function updateDoctor($id)
    {
        $attributes = request()->validate([

            'name'=>['required','string','between:5,50'],
            'title_jop'=>['required','string','between:5,50'],
            'email'=>['required','email','between:5,50',Rule::unique('doctors')->ignore($id)],
            'avatar'=>['image'],
            'facebook_link'=>['required','url','between:5,190',Rule::unique('doctors')->ignore($id)],
            'twitter_link'=>['required','url','between:5,190',Rule::unique('doctors')->ignore($id)],
            'linked-in_link'=>['required','url','between:5,190',Rule::unique('doctors')->ignore($id)],
            'mobile_number'=>['required','numeric',Rule::unique('doctors')->ignore($id)],
            'status'=>['required',Rule::in(['active','deactivate'])]

        ]);
        if (request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('doctors/avatars');
        }
        $doctor = Doctor::findOrFail($id);
        $doctor->update($attributes);
        alert()->success('Doctor Updated Successfully','Success');
        return back();
    }
}
