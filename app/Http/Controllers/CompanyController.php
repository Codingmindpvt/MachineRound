<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    
    public function index()
    {
        $result['data']=Company::all();
        return view('company.main',$result);
    }
   
    public function manage_team_process(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'logo'=>'required',
            'address'=>'required',          
            
        ]);

        if($request->post('id')>0){
            $model=Comapny::find($request->post('id'));
            $msg="Comapny data updated";
        }else{
            $model=new Comapny();
            $msg="Comapny data inserted";
        }
        if($request->hasfile('Comapny_image')){

            if($request->post('id')>0){
               
                $arrImage=DB::table('companies')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/'.$arrImage[0]->Team_image)){
                    Storage::delete('/public/media/'.$arrImage[0]->Team_image);
                }
            }
            $company_image=$request->file('company_image');
            $ext=$Team_image->extension();
            $image_name=time().'.'.$ext;
            $company_image->storeAs('/public/media/',$image_name);
            $model->company_image=$image_name;
        }

        $model->name=$request->post('name');
        $model->logo=$request->post('logo');
        $model->address=$request->post('address');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('team');
    }
    public function show(Request $request,$id='')
    {
        $arr=Company::where(['id'=>$id])->get(); 
        $result['list']=$arr['0'];
        return view('show_team',$result);
    }

    
    public function manage_team(Request $request,$id='')
    {
        if($id>0){
            $arr=Company::where(['id'=>$id])->get(); 

            $result['name']=$arr['0']->name;
            $result['logo']=$arr['0']->logo;
            $result['address']=$arr['0']->address;
            
            
            $result['id']=$arr['0']->id;
        }else{
            $result['name']='';
            $result['logo']='';
            $result['address']='';
           
            $result['id']=0;
            
        }
        return view('company.main',$result);
    }

    public function delete(Request $request,$id){
        $model=Company::find($id);
        $model->delete();
        $request->session()->flash('message','company data  deleted');
        return redirect('company');
    }

    public function status(Request $request,$status,$id){
        $model=Company::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','Team status updated');
        return redirect('Team');
    }
}
