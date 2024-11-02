<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Auth;

class ExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('admin.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'en_position' => 'required',
            'en_company' => 'required',
            'en_details' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $inputs = $request->all();
        Experience::create($inputs);
        return redirect()->route('experiences.index')->with($this->notification('Experience has been added'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        return view('admin.experiences.edit', compact('experience'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $this->validate($request, [
            'en_position' => 'required',
            'en_company' => 'required',
            'en_details' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $inputs = $request->all();
        $experience->update($inputs);
        return redirect()->route('experiences.index')->with($this->notification('Experience has been updated'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience  $experience)
    {
        $experience->delete();
        return redirect()->route('experiences.index')->with($this->notification('Experience has been deleted'));
    }
}
