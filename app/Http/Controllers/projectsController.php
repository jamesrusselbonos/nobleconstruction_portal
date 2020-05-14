<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;

use Auth;
use DB;

class projectsController extends Controller
{

    public function __construct(){

        $this->middleware('revalidate');

        $this->middleware('auth');
    }
    
    
    public function create(Request $request){

    	$project = new Projects;

    	$project->job_name = $request->get('job_name');
    	$project->cost = $request->get('cost');
    	$project->description = $request->get('job_desc');
    	$project->start_date = $request->get('start_date');
    	$project->end_date = $request->get('end_date');
    	$project->location = $request->get('job_location');
    	$project->client_id = $request->get('client_id');
    	$project->client_name = $request->get('client_name');
    	$project->client_email = $request->get('client_email');
    	$project->cline_pnumber = $request->get('client_pnumber');
    	$project->status = $request->get('job_status');

    	$project->save();

    	return redirect()->back();
    }

    public function calendar_view(){

        if(Auth::check()){
            $user = Auth::user()->id;

            $project_calendar = DB::table('projects')
                ->select('*')
                ->where('client_id','=',$user)
                ->get();


            return view('clients/client_calendar', compact('project_calendar'));
        }
        else{
           return redirect('login');
        }

    }

    public function project_overview(){
		
		if(Auth::check()){
            $user = Auth::user()->id;

            $project_overview = DB::table('projects')
            ->select('*')
            ->where('client_id','=',$user)
            ->get();

            return view('clients/client_projects', compact('project_overview'));
        }
        else{
           return redirect('login');
        }
    }
}
