<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;

class projectsController extends Controller
{
    public function create(Request $request){

    	$project = new Projects;

    	$project->job_name = $request->get('job_name');
    	$project->cost = $request->get('cost');
    	$project->description = $request->get('job_desc');
    	$project->start_date = $request->get('start_date');
    	$project->end_date = $request->get('end_date');
    	$project->location = $request->get('job_location');
    	$project->client_name = $request->get('client_name');
    	$project->client_email = $request->get('client_email');
    	$project->cline_pnumber = $request->get('client_pnumber');

    	$project->save();

    	return redirect()->route('clients/client_add_projects');
    }
}
