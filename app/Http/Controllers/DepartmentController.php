<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('department.show_all_departments')->with('departments',$departments);
    }

    public function create()
    {
        $department = Department::get();
        return view('department.add_new_departments')->with('department',$department);;
    }
    public function store(Request $request)
    {

        $request->validate([
            
            'name' => 'required',            
        ]);

        $department = new department;
        $department->name = $request->name;
        $department->save();
        $request->session()->flash('status','Department Inserted Successfully');
        return redirect('departments');
    }

    public function show($id)
    {
         // get the shark
         $department = department::find($id);
        
         // show the view and pass the shark to it
         return view('department.show')
             ->with('department', $department);
    }

    public function edit($id)
    {

         $department = department::find($id);
       
        return view('department.edit_department')->with('department',$department) ;

    }

    public function update(Request $request, $id)
    {
          

        $request->validate([
            'name' => 'required',
        ]);

        $department = department::find($id); 
        $department->name = $request->name;
        $department->save();
        $request->session()->flash('status','Department Updated Successfully');
        return redirect('departments');
    }

    public function destroy($id)
    {       

        $department = department::find($id);
        
        $department->delete();
        session()->flash('status', 'Department Deleted Successfully');
        return redirect('departments');
    }

}
