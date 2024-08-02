<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Description;
use App\Models\DesignaitonWithSalary;
use App\Models\Designation;
use App\Models\Mapping;
use App\Models\Project;
use App\Models\Salary;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function description_list()
    {
        $description = Description::with('title')->get();
        $title = Title::all();
        return view('Backend.Pages.Settings.descriptions', compact('description', 'title'));
    }

    public function description_store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title_id' => 'required|integer',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Description::create([
            'title_id' => $request->title_id,
            'description' => $request->description,
        ]);

        return redirect()->route('Description');
    }

    public function update($id)
    {
        $title = Title::all();
        $description_data = Description::find($id);
        return view('Backend.Pages.Settings.descriptions_update', compact('description_data', 'title'));
    }

    public function description_update(Request $request, $id)
    {
        // dd($request->all());
        $description = Description::find($id);
        $validator = Validator::make($request->all(), [
            'title_id' => 'required|integer',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $description->update([
            'title_id' => $request->title_id,
            'description' => $request->description,
        ]);

        return redirect()->route('Description');
    }

    public function description_delete($id)
    {
        Description::find($id)->delete();
        return redirect()->back();
    }


    public function processRequest(Request $request)
    {
        $data = Description::find($request);
        return response()->json(['message' => 'Request processed successfully', 'data' => $data]);
    }







    public function mapping()
    {
        $Mapping = Mapping::with('description', 'designation')->get();
        $Description = Description::all();
        $Designation = DesignaitonWithSalary::all();
        // dd($Mapping);
        return view('Backend.Pages.Settings.designation', compact('Designation', 'Description', 'Mapping'));
    }

    public function mapping_store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'description_id' => 'required',
            'designation_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Mapping::create([
            'description_id' => $request->description_id,
            'designaiton_with_salary_id' => $request->designation_id,
        ]);

        return redirect()->back();
    }


    public function mapping_update($id)
    {
        $Mapping = Mapping::find($id);
        $Description = Description::all();
        $Designation = DesignaitonWithSalary::all();
        // dd($Mapping);
        return view('Backend.Pages.Settings.designation_update', compact('Designation', 'Description', 'Mapping'));
    }

    public function mapping_update_store(Request $request, $id)
    {
        // dd($request->all());
        $Mapping = Mapping::find($id);
        $validator = Validator::make($request->all(), [
            'description_id' => 'required',
            'designation_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $Mapping->update([
            'description_id' => $request->description_id,
            'designaiton_with_salary_id' => $request->designation_id,
        ]);

        return redirect()->route('Mapping');
    }

    public function mapping_delete($id)
    {
        Designation::find($id)->delete();
        return redirect()->back();
    }









    public function salary()
    {
        $Designation = DesignaitonWithSalary::all();
        return view('Backend.Pages.Settings.salary', compact('Designation'));
    }

    public function salary_store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'designation' => 'required',
            'salary' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DesignaitonWithSalary::create([
            'designation' => $request->designation,
            'salary' => $request->salary,
        ]);

        return redirect()->back();
    }

    public function salary_update($id)
    {
        $Salary = DesignaitonWithSalary::find($id);
        return view('Backend.Pages.Settings.salary_update', compact('Salary'));
    }

    public function salary_store_update(Request $request, $id)
    {
        $Salary = DesignaitonWithSalary::find($id);
        $validator = Validator::make($request->all(), [
            'designation' => 'required',
            'salary' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $Salary->update([
            'designation' => $request->designation,
            'salary' => $request->salary,
        ]);

        return redirect()->route('Salary');
    }

    public function salary_delete($id)
    {
        DesignaitonWithSalary::find($id)->delete();
        return redirect()->back();
    }













    public function title()
    {
        $Project = Project::all();
        $Title = Title::all();
        return view('Backend.Pages.Settings.title', compact('Project', 'Title'));
    }

    public function title_store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            // 'project_id' => 'required|max:2',
            'title' => 'required|max:50',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Title::create([
            // 'project_id' => $request->project_id,
            'title' => $request->title,
        ]);

        return redirect()->back();
    }

    public function title_update($id)
    {
        $Title = Title::find($id);
        return view('Backend.Pages.Settings.title_update', compact('Title'));
    }

    public function title_store_update(Request $request, $id)
    {
        $Title = Title::find($id);
        $validator = Validator::make($request->all(), [
            // 'project_id' => 'required|max:2',
            'title' => 'required|max:50',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $Title->update([
            // 'project_id' => $request->project_id,
            'title' => $request->title,
        ]);

        return redirect()->route('Title');
    }

    public function title_delete($id)
    {
        Salary::find($id)->delete();
        return redirect()->back();
    }
}
