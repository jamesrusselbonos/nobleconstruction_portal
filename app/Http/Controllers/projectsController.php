<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;

use App\Service;

use App\Order;

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

        $order = new Order;

        $order->client_name = $request->get('client_name');
        $order->client_email = $request->get('client_email');
        $order->client_pnumber = $request->get('client_pnumber');
        $order->client_id = $request->get('client_id');
        $order->client_address = $request->get('client_address');
        $order->job_name = $request->get('job_name');
        $order->cost = $request->get('cost');

        $order->save();

    	return redirect('projects');
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
    
     public function project_edit(Request $request){

        $edit_project = Projects::find($request->m_id);
        $edit_project->client_id = $request->m_client_id;
        $edit_project->client_name = $request->m_client_name;
        $edit_project->client_email = $request->m_client_email;
        $edit_project->cline_pnumber = $request->m_client_pnumber;
        $edit_project->job_name = $request->m_job_name;
        $edit_project->cost = $request->m_cost;
        $edit_project->description = $request->m_desc;
        $edit_project->start_date = $request->m_start_date;
        $edit_project->end_date = $request->m_end_date;
        $edit_project->location = $request->m_location;
        $edit_project->status = $request->m_status;
        $edit_project->save();

        return redirect()->back();
    
    }

    public function show_add_project(){

        $services = Service::all();

        return view('clients/client_add_projects', compact('project_overview', 'services'));
    }

    public function order_overview(){

        if(Auth::check()){
            $user = Auth::user()->id;

            $order_overview = DB::table('orders')
            ->select('*')
            ->where('client_id','=',$user)
            ->get();

            return view('clients/client_orders', compact('order_overview'));
        }
        else{
           return redirect('login');
        }
    }
}
