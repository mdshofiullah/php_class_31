<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    protected $students;
    protected $student;


    public function index()
    {
       return view('add-student');
    }
    public function create(Request $request)
    {
//        return $request->all();  ******** to check data if this is shown or all data collect correctly from a form
        $this->student = new Student();    //here Student is the model name and we create a
        $this->student->name    = $request->name;  // here student->name is database table name
        $this->student->email   = $request->email;
        $this->student->mobile  = $request->mobile;
        $this->student->save();
//we can return data in 3 ways
        return redirect()->back()->with('message', 'Student Info save successfully');  // with this way message store in session 1 time
    }
    public function manage()
    {
        //return Student::all();  //by this it call our model class Student and collects all data from database that created by add student
       // return Student::orderBy('id','desc')->get();  // this is build in function that collect with LIFO order with table id number & get method give all data
       // return Student::orderBy('id','desc')->first(); // this collect last data by first
       // return Student::orderBy('id','desc')->take(2)->get(); // this collect data last two data
        //return Student::orderBy('id','desc')->skip(1)->first(); // this collect data last second data except first one
        //return Student::orderBy('id','desc')->skip(1)->take(5)->get(); // this collect data last five data except first one

        $this->students = Student::orderBy('id','desc')->get();
        return view('manage-student',['students' => $this->students]);
    }
    public function edit($id)
    {

        $this->student = Student::find($id); // find data that created to database through id and here Student->is the Model
        //return $this->student;

        return view('edit-student',['student' => $this->student]);
    }
    public function update(Request $request,$id)
    {
        $this->student = Student::find($id);

        $this->student->name    = $request->name;
        $this->student->email   = $request->email;
        $this->student->mobile  = $request->mobile;
        $this->student->save();

        return redirect('/manage-student')->with('message', 'Student Info Updated Successfully');
    }
    public function delete($id)
    {
        $this->student = Student::find($id);
        $this->student->delete();
        return redirect('/manage-student')->with('message', 'Student Info Deleted Successfully');
    }

}
