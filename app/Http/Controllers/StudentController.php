<?php

namespace App\Http\Controllers;
use App\Models\Student; 
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('/student/list', compact('students'));
    }
    public function add(){
        return view('/student/add');
    }
    public function store(Request $request){  
        $data = $request->all();
        $student = new Student();
        $student->first_name = $data['first_name'];
        $student->middle_name = $data['middle_name'];   
        $student->last_name = $data['last_name'];
        $student->course = $data['course'];
        $student->gender = $data['gender'];   
        $student->phone_number = $data['phone_number'];
        $student->current_address = $data['current_address'];   
        $student->email = $data['email'];
        $student->password = $data['password'];
        $student->confirm_password = $data['confirm_password'];   
        $student->save();   
        return redirect()->route('list.student');  
    }     
    public function edit($id){
        $student = Student::find($id);
        return view('/student/edit', compact('student'));
    }
    public function update(Request $request){
        $data = $request->all();
        $student = Student::find($request->id);
        $student->first_name = $data['first_name'];
        $student->middle_name = $data['middle_name'];   
        $student->last_name = $data['last_name'];  
        $student->course = $data['course'];
        $student->gender = $data['gender'];   
        $student->phone_number = $data['phone_number'];
        $student->current_address = $data['current_address'];   
        $student->email = $data['email'];
        $student->password = $data['password'];
        $student->confirm_password = $data['confirm_password'];   
        $student->save();       
        return view('/student/list');   
    }       
    public function delete($id){
        $student = Student::find($id)->delete();
        return view('/student/list');  
    }
}
