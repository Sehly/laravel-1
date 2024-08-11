<?php

namespace App\Http\Controllers;


use App\Models\Student;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index() {
    $students = Student::all();
    return view('students.index', compact('students'));
    }

    public function create(){
        return view('students.create');
    }

    public function view($id){
        $student= Student::findOrFail($id);
        return view('students.view', compact('student'));
    }

    public function edit($id){
        $student = Student::findOrFail($id);
        return view('students.edit',compact('student'));
    }


    public function store(){


        $request = request();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'age' => 'required|integer',
            'gender' => 'required|in:male,female',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $student = new Student();
        $student->name = request()->name;
        $student->email = request()->email;
        $student->age =  request()->age;
        $student->gender = request()->gender;
        if (request()->hasFile('image')) {
        $student->image = request()->file('image')->store('students_images', 'public');
        }
        $student->save();

        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }

    public function destroy($id){
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
        }

    public function update($id){

        request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer',
            'gender' => 'required|in:male,female',
        ]);

        $student = Student::findOrFail($id);
        $student->name = request()->name;
        $student->email = request()->email;
        $student->age = request()->age;
        $student->gender = request()->gender;
        if (request()->hasFile('image')) {
        $student->image = request()->file('image')->store('students_images', 'public');
        }
        $student->save();

        return redirect()->route('students.index')->with('success','Student Updated');
    }




}
