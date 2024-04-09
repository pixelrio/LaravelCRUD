<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Models\Course;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.index', [
            'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create', ['courses' => Course::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->validated());

        $student->courses()->attach($request->course);

        Session::flash('success', 'Student added successfully');
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        Student::Destroy($id);
        Session::Flash('success', 'Student trashed successfully');
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $student = Student::withTrashed()->where('id', $id)->first();
        $student->forceDelete();
        Session::Flash('success', 'Student deleted successfully');
        return redirect()->route('students.index');
    }

    public function restore($id)
    {
        $student = Student::withTrashed()->where('id', $id)->first();
        $student->restore();
        Session::Flash('success', 'Student restored successfully');
        return redirect()->route('students.trashed');
    }
}
