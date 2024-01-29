<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Description;
use App\Models\Designation;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function description()
    {
        $description = Description::all();
        return view('Backend.Pages.Settings.descriptions', compact('description'));
    }

    public function description_store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Description::create([
            'description' => $request->description,
        ]);

        return redirect()->back();
    }







    public function designation()
    {
        $Designation=Designation::all();
        return view('Backend.Pages.Settings.designation',compact('Designation'));
    }

    public function designation_store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'designation' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Designation::create([
            'designation' => $request->designation,
        ]);

        return redirect()->back();
    }








    public function salary()
    {
        $Designation=Designation::all();
        $Salary=Salary::with('designation')->get();
        return view('Backend.Pages.Settings.salary',compact('Designation','Salary'));
    }

    public function salary_store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'designation_id' => 'required',
            'salary' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Salary::create([
            'designation_id' => $request->designation_id,
            'salary' => $request->salary,
        ]);

        return redirect()->back();
    }
}
