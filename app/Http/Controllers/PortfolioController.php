<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Auth;
use App\Traits\ImageUpload;

class PortfolioController extends Controller
{
    use ImageUpload;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::orderBy('completion','desc')->get();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.portfolios.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'en_name' => 'required',
            //'ar_name' => 'required',
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'image' => 'required',
            'en_client' => 'required',
            //'ar_client' => 'required',
            'completion' => 'required',
            'en_role' => 'required',
            //'ar_role' => 'required',
            'category_id' => 'required',
            'en_details' => 'required',
            //'ar_details' => 'required',
        ]);

        $inputs = $request->all();
        if ($request->hasFile('image')) {
            $inputs['image'] = $this->storeImage($request->file('image'), 'portfolios');
        }

        $portfolio = Portfolio::create($inputs);

        if ($request->hasFile('album')) {
            $images = $request->file('album');
            $uploadedImages = [];

            foreach ($images as $image) {
                $path = $this->storeImage($image, 'albums');
                $uploadedImages[] = ['image_path' => $path];
            }

            if (count($uploadedImages)) {
                $portfolio->galleries()->createMany($uploadedImages);
            }
        }

        return redirect()->route('portfolio.index')->with($this->notification( 'Portfolio has been created.'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        $categories = Category::select('id', 'name')->get();
        return view('admin.portfolios.edit', compact('portfolio', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $this->validate($request, [
            'en_name' => 'required',
            //'ar_name' => 'required',
            'en_client' => 'required',
            //'ar_client' => 'required',
            'completion' => 'required',
            'en_role' => 'required',
            //'ar_role' => 'required',
            'category_id' => 'required',
            'en_details' => 'required',
            //'ar_details' => 'required',
        ]);

        $inputs = $request->all();
        if ($request->hasFile('image')) {
            $this->deleteImage($portfolio->image, 'portfolios');
            $inputs['image'] = $this->storeImage($request->file('image'), 'portfolios');
        }

        $portfolio->update($inputs);
        return redirect()->route('portfolio.index')->with($this->notification( 'Portfolio has been updated.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        $this->deleteImage($portfolio->image, 'portfolios');
        $portfolio->delete();
        return redirect()->route('portfolio.index')->with($this->notification( 'Portfolio has been deleted.'));
    }
}
