<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Employee;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{

    public function getList()
    {
        $data = Employee::select('id','name','description','birthDate','department_id')->orderBy('id','DESC')->get();
        return view('admin.employee.list', compact('data'));
    }

    public function getAdd()
    {
    	$depa = Department::select('name','id')->get()->toArray();
    	return view('admin.employee.add', compact('depa'));
    }

    public function postAdd(EmployeeRequest $request)
    {
    	$empl = new Employee();
    	$empl->name 				= $request->txtName;
    	$empl->description 		=$request->txtDescription;
    	$empl->department_id 	=$request->sltDepa;
    	$empl->birthDate 			=$request->txtBirthDate;
    	$empl->save();
    	return redirect()->route('admin.empl.getList')->with(['flash_level'=>'success','flash_message'=>'Success :) Complete Add Employee']);
    }

    public function getEdit($id)
    {
        $department = Department::select('name','id')->get()->toArray();
        $data = Employee::find($id);
        return view('admin.employee.edit', compact('department', 'data'));
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request,
            ["txtName"=>"required"],
            ["txtName.required" => "Please Enter Name"]);
        $empl = Employee::find($id);
        $empl->name                = $request->input('txtName');
        $empl->description          = $request->input('txtDescription');
        $empl->department_id    = $request->input('sltDepa');
        $empl->birthDate            = $request->input('txtBirthDate');
        $empl->save();
        return redirect()->route('admin.empl.getList')->with(['flash_level'=>'success','flash_message'=>'Success :) Complete Edit Employee']);
    }

    public function getDelete($id)
    {
        $depa = Employee::find($id);
        $depa->delete($id);
        return redirect()->route('admin.empl.getList')->with(['flash_level'=>'success','flash_message'=>'Success :) Complete Delete Employee']);
    }
}
