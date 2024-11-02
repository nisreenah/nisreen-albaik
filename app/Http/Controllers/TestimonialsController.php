<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Traits\ImageUpload;

class TestimonialsController extends Controller
{
    use ImageUpload;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'en_comment' => 'required',
            'en_name' => 'required',
            'en_position' => 'required',
        ]);

        $inputs = $request->all();
        if ($request->hasFile('image')) {
            $inputs['image'] = $this->storeImage($request->file('image'), 'testimonials');
        }

        Testimonial::create($inputs);
        return redirect()->route('testimonials.index')->with($this->notification('Testimonial created successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $this->validate($request, [
            'en_comment' => 'required',
            'en_name' => 'required',
            'en_position' => 'required',
        ]);

        $inputs = $request->all();
        if ($request->hasFile('image')) {
            $this->deleteImage($testimonial->image, 'testimonials');
            $inputs['image'] = $this->storeImage($request->file('image'), 'testimonials');
        }

        $testimonial->update($inputs);
        return redirect()->route('testimonials.index')->with($this->notification('Testimonial updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $this->deleteImage($testimonial->image, 'testimonials');
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with($this->notification('Testimonial deleted successfully.'));
    }
}
