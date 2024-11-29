<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Backend\Units;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Units::all();
        return view('backend.pages.unit.index')->with('units', $units);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|unique:units|max:255',
            'short_name'=>'required|unique:units|max:6',
           
        ]);

        $unit=new Units;
        $unit->name = $request->name;
        $unit->short_name= $request->short_name;
       $unit->created_by= Auth::user()->name;
   
        $unit->save();

        return redirect()->route('unit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $unit = Units::find($id);
        return view('backend.pages.unit.edit')->with('unit', $unit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'short_name'=>'required|max:6',
            'status'=> 'required|max:1'

        ]);

        $Unit=Units::findorfail($id);
        $Unit->name=$request->name;
        $Unit->short_name=$request->short_name;
        $Unit->status=$request->status;
        $Unit->created_by=Auth::user()->name;

        $Unit->update();

        return redirect()->route('unit.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Units = Units::findorfail($id);
        $Units->delete();
        return redirect()->route('Units.index');
    }
}
