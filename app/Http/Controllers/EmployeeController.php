<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Department;

class EmployeeController extends Controller
{
   
    public function index()
    {
        $employees = Employee::all();
        return view('employee.show_all_employees')->with('employees',$employees);
    }

    public function create()
    {
        $department = Department::get();
        return view('employee.add_new_employees')->with('department',$department);;
    }
    public function store(Request $request)
    {

        $request->validate([
            
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'salary' => 'required' ,
            'dept_id' => 'required',
        ]);

        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->mobile = $request->mobile;
        $employee->salary = $request->salary;
        $employee->dept_id = $request->dept_id;
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
         $department = Department::get();
        return view('employee.edit_employee')->with([
            'employee' => $employee,
            'department' => $department,
            ]) ;

    }

    public function update(Request $request, $id)
    {
          

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'salary' => 'required' ,
            'dept_id' => 'required',
        ]);

        $employee = Employee::find($id); 
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->mobile = $request->mobile;
        $employee->salary = $request->salary;
        $employee->dept_id = $request->dept_id;

        $employee->save();
        $request->session()->flash('status','Employee Updated Successfully');
        return redirect('employees');
    }

    public function destroy($id)
    {
        

        $employee = Employee::find($id);
        
        $employee->delete();
        session()->flash('status', 'Employee Deleted Successfully');
        return redirect('employees');
    }
  
}
