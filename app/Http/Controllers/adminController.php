<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projects;

use App\User;

use App\Service;

use App\Order;

use App\Admin;

use App\Charts\projectchart;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

use DB;


use DataTables;


class adminController extends Controller
{

    public function __construct(){

        $this->middleware('revalidate');

        $this->middleware('auth:admin');
    }

    public function dashboard(){

        $project = Projects::all();

        $project_pending = Projects::where('status', 'pending')->count();
        $project_in_progress = Projects::where('status', 'In Progress')->count();
        $project_finished = Projects::where('status', 'Finished')->count();
        $project_cancelled = Projects::where('status', 'Cancelled')->count();

        $customer = User::orderBy('created_at', 'DESC')->get();;

        $total_customer = User::all()->count();

        $chart_options = [
            'chart_title' => 'Projects by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Projects',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'line',
        ];

        $chart = new LaravelChart($chart_options);

        $chart_options = [
            'chart_title' => 'Customers by months',
            'report_type' => 'group_by_date',
            'model' => 'App\User',
            'group_by_field' => 'created_at',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            'group_by_period' => 'month', // show users only registered this month
        ];

        $chart2 = new LaravelChart($chart_options);

        return view('admin_dashboard', compact('project', 'customer', 'project_pending', 'project_in_progress', 'project_finished', 'project_cancelled', 'total_customer', 'chart', 'chart2'));
    }

    public function admin_manage_project(){

    	return view('manage_project');
    }

    public function admin_manage_customers(){
        
        return view('admin_users');   
    }

    public function admin_show_orders(){

        return view('admin_orders');   
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

    public function ajaxshowcustomers(){

        $query = User::all();

        return datatables($query)
        ->addColumn('action', function($row){
               $btn = '<a href="/manage_customers/'.$row->id.'" type="button" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Delete</a>';

               return $btn;
            })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function ajaxshowcprojects(){

        $query = Projects::all();

        return datatables($query)
        ->addColumn('action', function($row){
               $btn = '<a type="button"  data-id="'.$row->id.'" class="btn btn-primary btn_p_overview" data-toggle="modal" data-target="#exampleModal"

                    p_id = "'.$row->id.'"
                    p_client_id = "'.$row->client_id.'"
                    p_client_name = "'.$row->client_name.'"
                    p_client_email = "'.$row->client_email.'"
                    p_client_pnumber = "'.$row->cline_pnumber.'"
                    p_job_name = "'.$row->job_name.'"
                    p_cost = "'.$row->cost.'"
                    p_desc = "'.$row->description.'"
                    p_start_date = "'.$row->start_date.'"
                    p_end_date = "'.$row->end_date.'"
                    p_location = "'.$row->location.'"
                    p_status = "'.$row->status.'"

                   ><i class="fa fa-gear"></i>&nbsp;Manage</a>';

               return $btn;
            })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function ajaxshoworders(){

        $query = Order::all();

        return datatables($query)
        ->make(true);
    }

    public function admin_services(){

        $services = Service::all();

        return view('services', compact('services')); 
    }

    public function edit_services(Request $request){

        $edit_service = Service::find($request->txt_se_id);
        $edit_service->service_name = $request->txt_se_service_name;
        $edit_service->service_cost = $request->txt_se_cost;
        
        $edit_service->save();

        return redirect()->back();
    }

    public function delete_services($id){

        DB::table('services')->where('id', $id)->delete();

        return redirect()->back();

    }

    public function create_services(Request $request){

        $service = new Service;

        $service->service_name = $request->get('job_name');
        $service->service_cost = $request->get('cost');

        $service->save();

        return redirect('services');
    }

    public function delete_customer($id){
        DB::table('users')->where('id', $id)->delete();

        return redirect()->back();
    }

    public function edit_account(Request $request){

        $edit_account = Admin::find($request->edit_acc_id);
        $edit_account->name = $request->adit_acc_name;
        $edit_account->email = $request->adit_acc_email;
        $edit_account->password = bcrypt($request->adit_acc_password);
        
        $edit_account->save();

        return redirect()->back();
    }
}
