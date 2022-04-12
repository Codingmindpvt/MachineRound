<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
  
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('customauth.login');
    }  
      
    public function registration()
    {
        return view('customauth.register');
    }
      
    public function postLogin(Request $request)
    {
        
        $postData = $request->all();
        $rules = [
            'email' => 'required',
            'password' => 'required',
            'role' =>'require',
        ];

        // $validator = Validator::make($postData, $rules);

        $userEmail = $request->get('email');
        $userPassword = $request->get('password');
        $userRole = $request->get('role');

        if (Auth::attempt(['email' => $userEmail, 'password' => $userPassword ,'role'=>$userRole])) 
        {
            if(Auth::user()->role == 'A')
            {
                return view('admin-dashboard');
            }
            elseif(Auth::user()->role == 'U')
            {
                return view('dashboard');
            }
          
        }
        else
        {
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
    }
      
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'age' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'role' => 'required',
            'image' => 'required',
            'password' => 'required|min:6',
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
        
                $employee = new User;
                $employee->name = $request->name;
                $employee->email = $request->email;
                $employee->age = $request->age;
                $employee->dob = $request->dob;
                $employee->role = $request->role; 
                $employee->address = $request->address;        
                $employee->password = Hash::make($request->password);
                $employee->image = $request->image;
                $employee->image = $imagName;
                $employee->save();
                $request->session()->flash('status','Signup Successfully');
             
        return redirect("login")->withSuccess('Signup Successfully');
    }
    
     public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
        
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
