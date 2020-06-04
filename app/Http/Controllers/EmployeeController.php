<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use TCG\Voyager\Models\Role as Role;

class EmployeeController extends Controller
{
    public function addEmployee(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = 'password';
        $user->department_id = $request->department_id;
        $user->designation_id = $request->designation_id;
        $user->date_of_birth = $request->date_of_birth;
        $user->fathers_name = $request->fathers_name;
        $user->mothers_name = $request->mothers_name;
        $user->marital_status = $request->marital_status;
        $user->spouse_name = $request->spouse_name;
        $user->date_of_joining = $request->date_of_joining;
        $user->blood_group = $request->blood_group;
        $user->save();
        return response()->json(['success'=>'Saved']);
    }

    public function getEmployees()
    {
        $role = Role::where('name','employee')->first();
        return User::where('role_id',$role->id)->with('department')->with('designation')->get();
    }

    public function getEmployee($id)
    {
        $employee = User::where('id',$id)->with('department')->with('designation')->first();
        return $employee;
    }
}

