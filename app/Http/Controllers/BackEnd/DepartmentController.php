<?php

namespace App\Http\Controllers\BackEnd;

use App\Department;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class DepartmentController extends Controller
{
    public function __invoke()
    {
        $departments = Department::paginate(paginate);
        return view('back.departments.all-departments',compact('departments'));
    }

    public function addNewDepartmentForm()
    {
        return view('back.departments.add-departments');
    }

    public function addNewDepartment()
    {

       $attributes = request()->validate([
            'name'=>['required','string','between:5,50'],
            'description'=>['required','string','between:5,250'],
            'avatar'=>['required','image']
        ]);

       $imageName = request('avatar')->store('departments/avatars');
       $attributes['avatar'] = $imageName;

       Department::create($attributes);
       alert()->success('New Department Added Successfully','Success');
       return back();

    }

    public function editDepartment($id)
    {
       $department = Department::findOrFail($id);
        return view('back.departments.edit',compact('department'));
    }

    public function updateDepartment($id)
    {
        $attributes = request()->validate([
        'name' => ['string','required','max:255',Rule::unique('departments')->ignore($id)],
        'description'=>['string','required','max:255'],
        'avatar' => ['image'],
        ]);
        if (request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('departments/avatars');
        }
        $department = Department::where('id',$id);
        $department->update($attributes);
        alert()->success('Department Updated Successfully','Success');
        return back();

    }

    public function deleteDepartment($id)
    {
        Department::findOrFail($id)->delete();
        alert()->success('Department Removed Successfully','Success');
        return back();

    }

    public function showDoctorDepartment($id)
    {
        $departments = Department::with('doctor')->where('id',$id)->paginate(paginate);
        return view('back.departments.department-doctors',compact('departments'));
    }

}
