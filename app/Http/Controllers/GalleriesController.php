<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Traits\ImageUpload;

class GalleriesController extends Controller
{
    use ImageUpload;

    public function index()
    {
        $portfolios  = Portfolio::all();
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries','portfolios'));
    }

    public function show($portfolioId)
    {
        $portfolios  = Portfolio::all();
        $portfolio = Portfolio::findOrFail($portfolioId);
        $galleries = $portfolio->galleries()->get();
        return view('admin.gallery.index', compact('galleries','portfolio','portfolios'));
    }

    public function store(Request $request)
    {
        $portfolioId = $request->get('portfolio_id');
        $portfolio = Portfolio::findOrFail($portfolioId);
        $image = $request->file('image');
        $path = $this->storeImage($image, 'albums');
        $portfolio->galleries()->create(['image_path' => $path]);
        return redirect()->back()->with($this->notification('Image successfully uploaded'));
    }

    public function destroy(Gallery $gallery)
    {
        $this->deleteImage($gallery->gallery, 'albums');
        $gallery->delete();
        return redirect()->back()->with($this->notification( 'Gallery image has been deleted.'));
    }
}
