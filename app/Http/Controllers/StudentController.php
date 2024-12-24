<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function Index() //fix next time should have dashboard
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function ViewCreatePage()
    {
        return view('student.create'); // directory of the view not necessarily from route
    }

    public function StoreData(Request $request)
    {
        $validateData = $request->validate([
            'LearnersNumber' => 'required',
            'FirstName' => 'required',
            'LastName' => 'required',
            'LearnersAge' => 'required'            
        ]);

        Student::create($validateData);

        return redirect()->route('student.index');
    }

    public function EditData(Student $student)
    {        
        return view('student.edit');
    }
}
