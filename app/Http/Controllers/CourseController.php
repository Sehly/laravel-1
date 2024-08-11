<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        //
        $courses=Course::paginate(5);
        return view('courses.index',compact('courses'));
    }
    public function create()
    {
        //
        return view('courses.create');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|min:25',
            'description' => 'required|text|max:50',
            'total_grade' => 'integer'
        ]);

        $course = new Course();
        $course->name = request()->name;
        $course->desciption = request()->desciption;
        $course->total_grade =  request()->total_grade;
        $course->save();

        return redirect()->route('courses.index')->with('success', 'course created successfully');
    }

    public function show(Course $course)
    {
        return view('courses.show',compact('course'));
    }

    public function edit(Course $course)
    {
        //
        return view('courses.edit',compact('course'));
    }

    public function update(Request $request, $id)
        {
            $validatedData = $request->validate([
                'name' => 'required|string|min:25',
                'description' => 'required|text|max:50',
                'total_grade' => 'integer'
            ]);


        $course = Course::findOrFail($id);
        $course->update($validatedData);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully!');
        }

        
    public function destroy(Course $course) 
    {
        //
        $course->delete();
        return to_route('courses.index');
    }
}
