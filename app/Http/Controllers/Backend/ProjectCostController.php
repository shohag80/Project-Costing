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
        // dd($request);
        $validator = Validator::make($request->all(), [
            'project_code' => 'required',
            'project_title' => 'required',
            'client' => 'required',
            'date' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Project::create([
            'project_code' => $request->project_code,
            'project_title' => $request->project_title,
            'client' => $request->client,
            'date' => $request->date,
        ]);

        return redirect()->route('Project_List');
    }

    public function project_update($id)
    {
        $project = Project::find($id);
        return view('Backend.Pages.Project.project_update', compact('project'));
    }

    public function project_update_store(Request $request, $id)
    {
        $project = Project::find($id);

        $validator = Validator::make($request->all(), [
            'project_code' => 'required',
            'project_title' => 'required',
            'client' => 'required',
            'date' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $project->update([
            'project_code' => $request->project_code,
            'project_title' => $request->project_title,
            'client' => $request->client,
            'date' => $request->date,
        ]);

        return redirect()->route('Project_List');
    }

    public function add_project()
    {
        return view('Backend.Pages.Project.add_project');
    }

    public function project_list()
    {
        $Project = Project::all();
        return view('Backend.Pages.Project.project_list', compact('Project'));
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

    public function add_component($project_id)
    {
        $Project = Project::find($project_id);
        $Titles = Title::where('status', 1)->get();
        $Descriptions = Description::with('designation')->get();
        $Designations = Designation::with('description')->get();
        $Salary = Salary::all();
        $Project_Details = ProjectDetails::where('project_id', $project_id)->get();
        $Total = ProjectDetails::where('project_id', $project_id)->sum('sub_total');
        // dd($Descriptions);
        return view('Backend.Pages.Project.project_component', compact('Salary', 'Project', 'Descriptions', 'Designations', 'Project_Details', 'Total', 'Titles'));
    }

    public function fetchSalary($designation_id)
    {
        $salary = Salary::where('designation_id', $designation_id)->value('salary');
        return response()->json(['salary' => $salary]);
    }

    public function project_details_store(Request $request, $project_id)
    {
        dd($request->all());
        // $validator = Validator::make($request->all(), [
        //     'project_name' => 'required',
        //     'cost_title' => 'required',
        //     'desciption_id' => 'required',
        //     'designation_id' => 'required',
        //     'salary' => 'required',
        //     'man_days' => 'required',
        //     'man_month' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        ProjectDetails::create([
            'project_id' => $project_id,
            'title' => $request->cost_title,
            'description_id' => $request->desciption_id,
            'designation_id' => $request->designation_id,
            'salary' => $request->salary,
            'man_days' => $request->man_days,
            'man_month' => $request->man_month,
            'sub_total' => $request->salary * $request->man_month,
        ]);
        return redirect()->back();
    }

    public function get_description()
    {
        $Description = Description::all();
        return response()->json($Description);
    }
}
