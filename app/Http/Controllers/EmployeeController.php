<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   
    public function index()
    {
        $employees = Employee::all();
        return view('employee.show_all_employees')->with('employees',$employees);
    }

    public function create()
    {
        return view('employee.add_new_employees');
    }
    public function store(Request $request)
    {

        $request->validate([
           
            'name' => 'required',
            'age' => 'required',
            'salary' => 'required' 
        ]);

        $imagName='noimg.png';
if($request->image)
{
        $request->validate([
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000', 
        ]);

        $imagName = date('mdYHis').uniqid().'.'.$request->image->extension();
        $request->image->move(public_path('employee_imgs'),$imagName);	
       

        }
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->age = $request->age;
        $employee->salary = $request->salary;
        $employee->image = $imagName;
        $employee->save();
        $request->session()->flash('status','Employee Inserted Successfully');
        return redirect('employees');
    }

    public function show($id)
    {
         // get the shark
         $employee = Employee::find($id);

         // show the view and pass the shark to it
         return view('employee.show')
             ->with('employee', $employee);
    }

    public function edit($id)
    {

         $employee = Employee::find($id);
       
        return view('employee.edit_employee')->with('employee',$employee) ;

    }

    public function update(Request $request, $id)
    {
          

        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'salary' => 'required' ,
        ]);

        $employee = Employee::find($id);

if($request->image){
    $request->validate([
        'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
    ]);  

        if($employee->image != 'noimg.png'){

          $oldImg =$employee->image;
          unlink(public_path('employee_imgs').'/'.$oldImg);

          $imgName = $request->image;
        }

            $imgName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('employee_imgs'), $imgName); 
        
    }
    else{
        $imgName = $employee->image;
    }  
        $employee->name = $request->name;
        $employee->age = $request->age;
        $employee->salary = $request->salary;
        $employee->image =  $imgName;
        $employee->save();
        $request->session()->flash('status','Employee Updated Successfully');
        return redirect('employees');
    }

    public function destroy($id)
    {
        

        $employee = Employee::find($id);
        if($employee ->image !='noimg.png'){ 
            $oldImg =$employee->image;
            unlink(public_path('employee_imgs').'/'.$oldImg); 
        }
        $employee->delete();
        session()->flash('status', 'Employee Deleted Successfully');
        return redirect('employees');
    }
  
}
