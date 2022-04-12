<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $result['data']=Team::all();
        return view('team.main',$result);
    }
   
    public function manage_team_process(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:teams,'.$request->post('id'),
            'contact_number'=>'required',
            
            
        ]);

        if($request->post('id')>0){
            $model=Team::find($request->post('id'));
            $msg="Team data updated";
        }else{
            $model=new Team();
            $msg="team data inserted";
        }
        if($request->hasfile('Team_image')){

            if($request->post('id')>0){
               
                $arrImage=DB::table('Team')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/'.$arrImage[0]->Team_image)){
                    Storage::delete('/public/media/'.$arrImage[0]->Team_image);
                }
            }
            $Team_image=$request->file('Team_image');
            $ext=$Team_image->extension();
            $image_name=time().'.'.$ext;
            $Team_image->storeAs('/public/media/',$image_name);
            $model->Team_image=$image_name;
        }

        $model->name=$request->post('name');
        $model->email=$request->post('email');
        $model->contact_number=$request->post('contact_number');
       
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('team');
    }
    public function show(Request $request,$id='')
    {
        $arr=Team::where(['id'=>$id])->get(); 
        $result['list']=$arr['0'];
        return view('team.show_team',$result);
    }

    
    public function manage_team(Request $request,$id='')
    {
        if($id>0){
            $arr=Team::where(['id'=>$id])->get(); 

            $result['name']=$arr['0']->name;
            $result['email']=$arr['0']->email;
            $result['contact_number']=$arr['0']->contact_number;
            
            
            $result['id']=$arr['0']->id;
        }else{
            $result['name']='';
            $result['email']='';
            $result['contact_number']='';
           
            $result['id']=0;
            
        }
        return view('team.manage',$result);
    }

    public function delete(Request $request,$id){
        $model=Team::find($id);
        $model->delete();
        $request->session()->flash('message','Team deleted');
        return redirect('team');
    }

    public function status(Request $request,$status,$id){
        $model=Team::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','Team status updated');
        return redirect('Team');
    }
}
