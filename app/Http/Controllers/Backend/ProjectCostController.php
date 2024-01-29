<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Description;
use App\Models\Designation;
use App\Models\Project;
use App\Models\ProjectDetails;
use App\Models\Salary;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectCostController extends Controller
{
    public function project_store(Request $request){
        // dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Project::create([
            'name' => $request->name,
        ]);

        return redirect()->back();
    }

    public function project_list(){
        $Project=Project::all();
        return view('Backend.Pages.Project.project_list',compact('Project'));
    }

    public function single_project($project_id){
        $Project=Project::find($project_id);
        $Title=Title::all();
        return view('Backend.Pages.Project.single_project_view',compact('Project','Title'));
    }

    public function title_store(Request $request){
        // dd($request);
        $validator = Validator::make($request->all(), [
            'project_id' => 'required',
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Title::create([
            'project_id' => $request->project_id,
            'title' => $request->title,
        ]);

        return redirect()->back();
    }

    public function add_component($project_id){
        $Title=Title::find($project_id);
        $Description=Description::all();
        $Salary=Salary::with('designation')->get();
        $Project_Details=ProjectDetails::all();
        // dd($Description->all());
        return view('Backend.Pages.Project.add_component',compact('Title','Description','Salary','Project_Details'));
    }

    public function project_details_store(Request $request){
        dd($request);
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // Project::create([
        //     'name' => $request->name,
        // ]);

        // return redirect()->back();
    }

}
