<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'en_title' => 'required',
            'en_details' => 'required',
            'icon' => 'required',
        ]);
        Service::create($request->all());
        return redirect()->route('services.index')->with($this->notification( 'The service was created successfully!'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $this->validate($request, [
            'en_title' => 'required',
            'en_details' => 'required',
            'icon' => 'required',
        ]);
        $service->update($request->all());
        return redirect()->route('services.index')->with($this->notification( 'The service was updated successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with($this->notification( 'The service was deleted successfully!'));
    }
}
