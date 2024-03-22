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
    public function description_list()
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

        return redirect()->route('Description');
    }
    
    public function update($id){
        $description_data=Description::find($id);
        return view('Backend.Pages.Settings.descriptions_update',compact('description_data'));
    }

    public function description_update(Request $request, $id)
    {
        $description=Description::find($id);
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $description->update([
            'description' => $request->description,
        ]);

        return redirect()->route('Description');
    }

    public function description_delete($id){
        Description::find($id)->delete();
        return redirect()->back();
    }
    
    
    public function processRequest(Request $request)
    {
        $data = Description::find($request);
        return response()->json(['message' => 'Request processed successfully', 'data' => $data]);
    }







    public function designation()
    {
        $Designation=Designation::with('description')->get();
        $Description=Description::all();
        return view('Backend.Pages.Settings.designation',compact('Designation','Description'));
    }
    
    public function designation_store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'description_id' => 'required',
            'designation' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Designation::create([
            'description_id' => $request->description_id,
            'designation' => $request->designation,
        ]);

        return redirect()->back();
    }


    public function designation_update($id)
    {
        $designation=Designation::find($id);
        $description=Description::all();
        return view('Backend.Pages.Settings.designation_update',compact('designation', 'description'));
    }

    public function designation_update_store(Request $request, $id)
    {
        // dd($request->all());
        $designation=Designation::find($id);
        $validator = Validator::make($request->all(), [
            'description_id' => 'required',
            'designation' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $designation->update([
            'description_id' => $request->description_id,
            'designation' => $request->designation,
        ]);

        return redirect()->route('Designation');
    }

    public function designation_delete($id){
        Designation::find($id)->delete();
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
    
    public function salary_update($id)
    {
        $Salary=Salary::find($id);
        $Designation=Designation::all();
        return view('Backend.Pages.Settings.salary_update',compact('Designation','Salary'));
    }
    
    public function salary_store_update(Request $request, $id)
    {
        $Salary=Salary::find($id);
        $validator = Validator::make($request->all(), [
            'designation_id' => 'required',
            'salary' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $Salary->update([
            'designation_id' => $request->designation_id,
            'salary' => $request->salary,
        ]);
        
        return redirect()->route('Salary');
    }
    
    public function salary_delete($id){
        Salary::find($id)->delete();
        return redirect()->back();
    }
}
