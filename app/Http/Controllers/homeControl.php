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
        $member->end_date = null;

        $member->duration = '';
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

    //Update Function
    function showtoupdateProject($ID){
        $ex1 = User::all();
        $ex2 = User::all();
        $sv = User::all();
        $output = Project::find($ID);
        return view('user.updateProject',['output'=> $output, 'ex1'=>$ex1, 'ex2'=>$ex2, 'sv'=>$sv,  ]);
    }

    function updateProject(Request $req){ //request data from form
        $data=Project::find($req->projectID); //id from the form name
        
        $data->start_date=$req->sdate;
        $data->end_date=$req->edate;
        
        $data->duration=$req->pduration;
        $data->projectStatus=$req->pstatus;
        $data->projectProgress=$req->pprogress;

        $data->save();
       
        $userid = Auth::user()->id;
        $disdata = Project::where('supervisorID','=',$userid)
        ->paginate(10);
        return view('user.viewproject',['disdata'=>$disdata]); 
    }

}
