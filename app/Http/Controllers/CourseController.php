<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Traits\ImageUpload;

class CourseController extends Controller
{
    use ImageUpload;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'en_title' => 'required',
            'ar_title' => 'nullable',
            'year' => 'required|digits:4|integer',
            'image' => 'required',
        ]);

        $inputs = $request->all();
        if ($request->hasFile('image')) {
            $inputs['image'] = $this->storeImage($request->file('image'), 'courses');
        }

        Course::create($inputs);
        return redirect()->route('courses.index')->with($this->notification('Course created successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course   $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $this->validate($request, [
            'en_title' => 'required',
            'ar_title' => 'nullable',
            'year' => 'required|digits:4|integer',

        ]);

        $inputs = $request->all();
        if ($request->hasFile('image')) {
            $this->deleteImage($course->image, 'courses');
            $inputs['image'] = $this->storeImage($request->file('image'), 'courses');
        }

        $course->update($inputs);
        return redirect()->route('courses.index')->with($this->notification('Course updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $this->deleteImage($course->image, 'courses');
        $course->delete();
        return redirect()->route('courses.index')->with($this->notification('Course deleted successfully.'));
    }
}
