<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projects;


class adminController extends Controller
{

    public function __construct(){

        $this->middleware('revalidate');

        $this->middleware('auth:admin');
    }

    public function admin_manage_project(){

    	$project_overview = Projects::all();


    	return view('manage_project', compact('project_overview'));
    }

    public function edit_project(Request $request){

    	$edit_project = Projects::find($request->txt_id);
        $edit_project->client_id = $request->txt_client_id;
        $edit_project->client_name = $request->txt_client_name;
        $edit_project->client_email = $request->txt_client_email;
        $edit_project->cline_pnumber = $request->txt_client_pnumber;
        $edit_project->job_name = $request->txt_job_name;
        $edit_project->cost = $request->txt_cost;
        $edit_project->description = $request->txt_desc;
        $edit_project->start_date = $request->txt_start_date;
        $edit_project->end_date = $request->txt_end_date;
        $edit_project->location = $request->txt_location;
        $edit_project->status = $request->txt_status;
       	$edit_project->save();

        return redirect()->back();
    }

    public function admin_calendar_view(){
    	$project_calendar = Projects::all();


    	return view('admin_calendar', compact('project_calendar'));
    }
}
