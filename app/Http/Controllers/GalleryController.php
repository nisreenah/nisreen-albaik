<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\Gallery;
use File;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function portfolioGallery(Portfolio $portfolio)
    {
        $gallery = $portfolio->gallery;
        return view('admin.gallery.index', compact('portfolio', 'gallery'));
    }


    public function deleteGallery(Gallery $gallery)
    {
        // $gallery->delete();

        // unlink(asset("images/portfolios/" . $gallery->image));


        // File::delete(public_path().'images/portfolios/'.$gallery->image);
        File::delete(asset('/images/portfolios/' . $gallery->image));

        $gallery->delete();

        alert()->success('The gallery was deleted successfully!')->persistent('Close');
        return redirect()->back();
    }


    public function storeGallery(Request $request, Gallery $gallery)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $original_name = strtolower(trim($image->getClientOriginalName()));
            $file_name = time() . rand(100, 999) . $original_name;

            $image->move(public_path('images/portfolios/'), $file_name);
            $input['image'] = $file_name;

        }

        Gallery::create($input);

        alert()->success('The gallery was added successfully!')->persistent('Close');
        return redirect()->back();

    }

}
