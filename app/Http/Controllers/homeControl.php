<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Project;


class homeControl extends Controller
{
    //Redirect Function
    function redirectFunct()
    {
        $typeuser = Auth::user()->usertype;

        if ($typeuser == '1') {
            return view('admin.adminpage');
        } else {
            return view('user.userpage');
        }
    }


    //Dropdown Function
    function user()
    {
        $data = user::all();
        return view('user.viewproject', compact("data"));
    }

    //Dropdown Function
    function adminregister()
    {
        
        $data = user::all();
        $data1 = user::all();
        $data2 = user::all();
        return view('admin.registerpage', compact("data", "data2", "data1"));
    }


    //Register Function
    function addData(Request $req)
    {
       
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
        if ($typeuser == '1') {
            return view('admin.adminpage');
        } else {
            return view('user.userpage');
        }
    }

    //Display All Function
    function display4all()
    {
        $disdata = Project::paginate(4);
        return view('admin.viewallproject', ['disdata' => $disdata]);
    }

    //Display For Supervisor Function
    function display4supervisor()
    {
        $userid = Auth::user()->id;
        $disdata = Project::where('supervisorID', '=', $userid)
            ->paginate(10);
        return view('user.viewproject', ['disdata' => $disdata]);
    }


    //Display For Examiner Function
    function display4examiner()
    {
        $disdata = Project::where(function ($query) {
            $userid = Auth::user()->id;
            $query->where('examiner1ID', '=', $userid)
                ->orWhere('examiner2ID', '=', $userid);
        })->paginate(10);
        return view('user.examineeproject', ['disdata' => $disdata]);
    }

    //Update Function
    function showtoupdateProject($ID)
    {
        $ex1 = User::all();
        $ex2 = User::all();
        $sv = User::all();
        $output = Project::find($ID);
        return view('user.updateProject', ['output' => $output, 'ex1' => $ex1, 'ex2' => $ex2, 'sv' => $sv,]);
    }

    //Update Function
    function updateProject(Request $req)
    { //request data from form
        $data = Project::find($req->projectID); //id from the form name
        $data->start_date = $req->sdate;
        $data->end_date = $req->edate;
        $data->duration = $req->pduration;
        $data->projectStatus = $req->pstatus;
        $data->projectProgress = $req->pprogress;
        $data->title = $req->pname;

        $data->save();
        return view('user.donePage');
    }

    //Delete Function
    function deleteProject($ID)
    {
        $value = Project::find($ID);
        $value->delete();
        return view('user.deletePage');

    }

}