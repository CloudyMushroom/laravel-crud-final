<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function StoreData(Request $request)
    {
        $validateData = $request->validate([
            'LearnersNumber' => 'required',
            'FirstName' => 'required',
            'LastName' => 'required',
            'LearnersAge' => 'required'            
        ]);

        Student::create($validateData);

        return 'Created Successfully!';
    }
}
