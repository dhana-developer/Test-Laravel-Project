<?php
   
namespace App\Http\Controllers;
use App\Models\Employee; 
use Illuminate\Http\Request;

class EmployeeController extends Controller 
{
    public function index(){
        $employees = Employee::all();
        return view('/employee/list', compact('employees'));
    }
    public function add(){
        return view('/employee/add');
    }
    public function store(Request $request){  
        $data = $request->all();
        $employee = new Employee();
        $employee->employee_name = $data['employee_name'];
        $employee->employee_age = $data['employee_age'];   
        $employee->employee_mobile = $data['employee_mobile'];
        $employee->employee_email = $data['employee_email'];
        $employee->address = $data['address'];   
        $employee->save();   
        return redirect()->route('list.employee');  
    }     
    public function edit($id){
        $employee = Employee::find($id);
        return view('/employee/edit', compact('employee'));
    }
    public function update(Request $request){
        $data = $request->all();
        $employee = Employee::find($request->id);
        $employee->employee_name = $data['employee_name'];
        $employee->employee_age = $data['employee_age'];
        $employee->employee_mobile = $data['employee_mobile'];
        $employee->employee_email = $data['employee_email'];
        $employee->address = $data['address'];
        $employee->save();
        return view('/employee/list');
    }
    public function delete($id){
        $employee = Employee::find($id)->delete();
        return view('/employee/list');  
    }
}
  