<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Project;


class homeControl extends Controller
{
    function redirectFunct(){
        $typeuser = Auth::user()->usertype;
        
        if($typeuser == '1'){
            return view('admin.adminpage');
        }
        else{
            return view('user.userpage');
        }
    }


    function user(){
        $data=user::all();
        return view('user.viewproject', compact("data"));
    }

    function adminregister(){
        $data=user::all();
        $data1=user::all();
        $data2=user::all();
        return view('admin.registerpage', compact("data","data2","data1"));
    }


    //Add Function
    function addData(Request $req){
        $member = new Project;
        //$member->cust_id = $req->custid;
        $member->title = $req->pname;
        $member->start_date = null;
        $member->end_date =null;

        $member->duration = null;
        $member->projectProgress = '';
        $member->projectStatus = '';
        $member->supervisorID = $req->supervisor;
        $member->examiner1ID = $req->examiner1;
        $member->examiner2ID = $req->examiner2;
        $member->studentID = $req->sid;
        $member->studentName = $req->sname;
      
        $member->save();

        $typeuser = Auth::user()->usertype;
        
        if($typeuser == '1'){
            return view('admin.adminpage');
        }
        else{
            return view('user.userpage');
        }
    }


    function display4supervisor(){

        $userid = Auth::user()->id;
        $disdata = Project::where('supervisorID','=',$userid)
        ->paginate(10);
        return view('user.viewproject',['disdata'=>$disdata]);
   
        
    }
}
