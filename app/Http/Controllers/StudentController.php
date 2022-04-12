<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.show_all_students')->with('students',$students);
    }

    public function create()
    {
        return view('student.add_new_students');
    }

    public function store(Request $request)
    {
      
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required' 
        ]);

        $imagName='noimg.png';
if($request->image)
{
        $request->validate([
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000', 
        ]);

        $imagName = date('mdYHis').uniqid().'.'.$request->image->extension();
        $request->image->move(public_path('student_imgs'),$imagName);	
       

        }
        
        $student = new Student;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->address = $request->address;
        $student->image = $imagName;
        $student->save();
        $request->session()->flash('status','student Inserted Successfully');
        return redirect('students');
    }


    public function show($id)
    {
        // get the shark
        $student = Student::find($id);

        // show the view and pass the shark to it
        return view('student.show')
            ->with('student', $student);
    }
    public function edit($id)
    {

         $student = Student::find($id);
        return view('student.edit_student')->with('student',$student) ;
    }

    public function update(Request $request, $id)
    {
         

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required' 
        ]);

        $student = Student::find($id);

if($request->image){
    $request->validate([
        'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
    ]);  

        if($student->image != 'noimg.png'){

          $oldImg =$student->image;
          unlink(public_path('student_imgs').'/'.$oldImg);

          $imgName = $request->image;
        }

            $imgName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('student_imgs'), $imgName); 
        
    }
    else{
        $imgName = $student->image;
    }   $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->address = $request->address;
        $student->image =  $imgName;
        $student->save();
        $request->session()->flash('status','Student Updated Successfully');
        return redirect('students');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        if($student ->image !='noimg.png'){ 
            $oldImg =$student->image;
            unlink(public_path('student_imgs').'/'.$oldImg); 
        }
        $student->delete();
        session()->flash('status', 'student Deleted Successfully');
        return redirect('students');
    }
}
