<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Auth;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'percentage' => 'required',
            'name' => 'required',
            'summary' => 'required',
        ]);

        $input = $request->all();
        Skill::create($input);
        return redirect()->route('skills.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skills.edit', compact('skill'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'percentage' => 'required',
            'name' => 'required',
            'summary' => 'required',
        ]);

        $input = $request->all();
        Skill::findOrFail($id)->update($input);
        return redirect()->route('skills.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Skill::findOrFail($id)->delete();
        return redirect()->route('skills.index');
    }
}
