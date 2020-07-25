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

    public function deleteDepartment($id)
    {
      Department::findOrFail($id)->delete();
      alert()->success('Department Removed Successfully','Success');
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

}
