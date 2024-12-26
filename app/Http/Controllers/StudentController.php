<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function Index() //fix next time should have dashboard
    {
        $students = Student::all(); // fetch all the data from student table
        return view('student.index', compact('students')); // compressed or compact then display it on student.index page
    }

    public function ViewCreatePage()
    {
        return view('student.create'); // directory of the view, not necessarily from route its from the files
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

    public function EditData($id) // view only
    {   
        $student = Student::findorFail($id);
        return view('student.edit', compact('student'));
    }

    public function UpdatingData(Request $request, $id)
    {
        $validateData = $request->validate([

            'LearnersNumber' => 'required',
            'FirstName' => 'required',
            'LastName' => 'required',
            'LearnersAge' => 'required'
        ]);

        $student = Student::findorFail($id);
        $student->update($validateData);

        return redirect()->route('student.index');
        //return 'updated successfully';
    }
    
    public function DeleteData($id)
    {
        $student = Student::findorFail($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}
