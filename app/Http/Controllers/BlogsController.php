<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use Auth;

class BlogsController extends Controller
{
    use ImageUpload;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'en_title' => 'required',
            'ar_title' => 'nullable',
            'en_details' => 'required',
            'ar_details' => 'nullable',
            'image' => 'required',
        ]);

        $inputs = $request->all();
        $inputs['posted_by'] = Auth::id();

        if ($request->hasFile('image')) {
            $inputs['image'] = $this->storeImage($request->file('image'), 'blogs');
        }

        Blog::create($inputs);
        return redirect()->route('blogs.index')->with($this->notification( 'Blog created successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'en_title' => 'required',
            'ar_title' => 'nullable',
            'en_details' => 'required',
            'ar_details' => 'nullable',
        ]);

        $inputs = $request->all();
        if ($request->hasFile('image')) {
            $this->deleteImage($blog->image, 'blogs');
            $inputs['image'] = $this->storeImage($request->file('image'), 'blogs');
        }
        $blog->update($inputs);

        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $this->deleteImage($blog->image, 'blogs');
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}
