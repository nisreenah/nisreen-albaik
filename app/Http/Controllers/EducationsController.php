<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    /**x
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::all();
        return view('admin.educations.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        Education::create($inputs);
        return redirect()->route('educations.index')->with($this->notification('Education created successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('admin.educations.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $input = $request->all();
        $education->update($input);
        return redirect()->route('educations.index')->with($this->notification('Education updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->route('educations.index')->with($this->notification('Education deleted successfully.'));
    }
}
