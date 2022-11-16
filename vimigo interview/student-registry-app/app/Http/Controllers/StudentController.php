<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImport; 
class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Student::paginate(15);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Student::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Student::find($id);
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
        $student = Student::find($id); 
        $student->update($request->all());
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Student::destroy($id);
    }

    /**
     * Search student by name.
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function searchByName($name)
    {
        return Student::where('name', 'like', '%'.$name.'%')->get();
    }

    /**
     * Search student by email.
     *
     * @param  str  $email
     * @return \Illuminate\Http\Response
     */
    public function searchByEmail($email)
    {
        return Student::where('email', 'like', '%'.$email.'%')->get();
    }

    /**
     * Used to allow creating new students from csv/excel files 
     */
    public function createStudents(Request $request)
    {   
        $path = $request->file('file')->getRealPath();
        Excel::import(new StudentsImport, $path);

       return redirect('/')->with('success', 'Students Import Successfully!');
    }
}
