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
    public function project_store(Request $request)
    {
        dd($request);
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

    public function project_list()
    {
        $Project_Details = ProjectDetails::all();
        return view('Backend.Pages.Project.project_list', compact('Project_Details'));
    }

    public function single_project($project_id)
    {
        $Project = Project::find($project_id);
        $Title = Title::where('project_id', $project_id)->get();
        return view('Backend.Pages.Project.single_project_view', compact('Project', 'Title'));
    }

    public function title_store(Request $request)
    {
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

    public function add_component($project_id, $Title_id)
    {
        $Project = Project::find($project_id);
        $Title = Title::find($Title_id);
        $Description = Description::all();
        $designations = Designation::all();
        $Project_Details = ProjectDetails::where('project_id',$project_id)->get();
        $Total = ProjectDetails::where('project_id',$project_id)->sum('sub_total');
        // dd($Title->all());
        return view('Backend.Pages.Project.add_component', compact('Project', 'Title', 'Description', 'designations', 'Project_Details','Total'));
    }

    public function fetchSalary($designation_id)
    {
        $salary = Salary::where('designation_id', $designation_id)->value('salary');
        return response()->json(['salary' => $salary]);
    }

    public function project_details_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'project_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'designation_id' => 'required',
            'salary' => 'required',
            'man_days' => 'required',
            'man_month' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        ProjectDetails::create([
            'project_id' => $request->project_id,
            'title' => $request->title,
            'description' => $request->description,
            'designation_id' => $request->designation_id,
            'salary' => $request->salary,
            'man_days' => $request->man_days,
            'man_month' => $request->man_month,
            'sub_total' => $request->salary * $request->man_month,
        ]);

        return redirect()->back();
    }
}
