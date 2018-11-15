<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Employee;
use App\Http\Requests\DeparementRequest;

class DeparementController extends Controller
{

	public function getList()
	{
		$data = Department::select('id','name','description')->orderBy('id','DESC')->get();
		return view('admin.department.list', compact('data'));
	}
	public function getAdd()
	{
		return view('admin.department.add');
	}

    public function postAdd (DeparementRequest $request){
    	$department = new Department;
    	$department->name = $request->txtName;
    	$department->description =$request->txtDescription;
    	$department->save();
    	return redirect()->route('admin.depa.getList')->with(['flash_level'=>'success','flash_message'=>'Success :) Complete Add Category']);
    }

    public function getEdit($id)
    {
    	$data = Department::findOrFail($id)->toArray();
    	return view('admin.department.edit', compact('data'));
    }

    public function postEdit(Request $request, $id)
    {
    	$this->validate($request,
    		["txtName"=>"required"],
    		["txtName.required" => "Please Enter Name"]);
    	$department = Department::find($id);
    	$department->name = $request->txtName;
    	$department->description =$request->txtDescription;
    	$department->save();
    	return redirect()->route('admin.depa.getList')->with(['flash_level'=>'success','flash_message'=>'Success :) Complete Edit Department']);
    }

    public function getDelete($id)
    {
        $empl = Employee::where('department_id',$id)->count();
        if ($empl == 0){
            $depa = Department::find($id);
            $depa->delete($id);
        return redirect()->route('admin.depa.getList')->with(['flash_level'=>'success','flash_message'=>'Success :) Complete Delete Department']);
        }else{
            echo "<script type='text/javascript'>
                alert('Sorry ! You Can Not Delete This Department');
                window.location = '";
                    echo route('admin.depa.getList');
                echo"'
            </script>";
        }  	
    }

}
