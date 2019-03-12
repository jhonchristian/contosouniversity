<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use Validator;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('Lastname', 'asc')->paginate(10);
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'idnumber' => 'required',            
            'lastname' => 'required|regex:/^[a-zA-z\s]+$/|max: 20',
            'firstname' => 'required|regex:/^[a-zA-z\s]+$/|max: 20',
            'middlename' => 'required|regex:/^[a-zA-z\s]+$/|max: 20',
            'suffix' => 'nullable',
            'course' => 'nullable',
            'birthday' => 'required',
            'phonenumber' => 'required|max:11',
            'email' => 'required|unique:students',
            'idpicture' => 'image|nullable|max:1999'
        ]);    
        // Handle File Upload
        if($request->hasFile('idpicture'))
        {
            // Get filename with extension
            $filenamewithExt = $request->file('idpicture')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('idpicture')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('idpicture')->storeAs('public/idpicture', $fileNameToStore);
        }
        else 
        {
            $fileNameToStore = 'noimage.jpg';
        }
        // Create Student
        $student = new Student();
        $student->IDnumber = $request->input('idnumber');
        $student->Gender = $request->input('gender');
        $student->Lastname = $request->input('lastname');
        $student->Suffix = $request->input('suffix');
        $student->Firstname = $request->input('firstname');
        $student->Middlename = $request->input('middlename');
        $student->Course = $request->input('course');
        $student->Birthday = $request->input('birthday');
        $student->PhoneNumber = $request->input('phonenumber');
        $student->Email = $request->input('email');
        $student->IDpicture = $fileNameToStore;
        $student->save();

        return redirect('/students')->with('success', 'New Student Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'idnumber' => 'required',            
            'lastname' => 'required|regex:/^[a-zA-z\s]+$/|max: 20',
            'firstname' => 'required|regex:/^[a-zA-z\s]+$/|max: 20',
            'middlename' => 'required|regex:/^[a-zA-z\s]+$/|max: 20',
            'suffix' => 'nullable',
            'course' => 'nullable',
            'birthday' => 'required',
            'phonenumber' => 'required|max:11',
            'email' => 'required',
            'idpicture' => 'image|nullable|max:1999'
        ]);    
        // Handle file upload
        if($request->hasFile('idpicture'))
        {
            // Get filename with extension
            $filenameWithExt = $request->file('idpicture')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('idpicture')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('idpicture')->storeAs('public/idpicture', $filenameToStore);
        }

        // update Student
        $student = Student::find($id);
        $student->IDnumber = $request->input('idnumber');
        $student->Gender = $request->input('gender');
        $student->Lastname = $request->input('lastname');
        $student->Suffix = $request->input('suffix');
        $student->Firstname = $request->input('firstname');
        $student->Middlename = $request->input('middlename');
        $student->Course = $request->input('course');
        $student->Birthday = $request->input('birthday');
        $student->PhoneNumber = $request->input('phonenumber');
        $student->Email = $request->input('email');
        $student->IDpicture = $filenameToStore;
        $student->save();

        return redirect('/students')->with('success', 'Student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
