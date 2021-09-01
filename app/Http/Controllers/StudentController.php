<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'roll_no' => 'required|numeric',
            'name' => 'required|min:3|max:255',
            'address' => 'required|min:3|max:255',
            'email' => 'required|max:255',
            'contact_no' => 'required|max:255',
        ]);
        Student::create([
            'roll_no' => $request->roll_no,
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'contact_no' => $request->contact_no,
            'active' => (bool) $request->active,
        ]);
        return redirect()->route('student');
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update($id, Request $request)
    {
        $student = Student::findOrFail($id);
        $request->validate([
            'roll_no' => 'required|numeric',
            'name' => 'required|min:3|max:255',
            'address' => 'required|min:3|max:255',
            'email' => 'required|max:255',
            'contact_no' => 'required|max:255',
        ]);
        $student->update([
            'roll_no' => $request->roll_no,
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'contact_no' => $request->contact_no,
            'active' => (bool) $request->active,
        ]);
        return redirect()->route('student');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student');
    }
}
