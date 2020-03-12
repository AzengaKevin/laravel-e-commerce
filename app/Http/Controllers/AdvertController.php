<?php

namespace App\Http\Controllers;

use App\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class AdvertController extends Controller
{
    public function index()
    {
        return view('adverts.index');
    }

    public function create()
    {
        return view('adverts.create');
    }

    public function store(Request $request)
    {
        //Validate Data
        $data = $request->validate([
            'message' => ['required', 'min:10', 'max:256'],
            'image' => ['required', 'mimes:[ng,jpg,jpeg'],
        ]);

        //Unset Image Data From the Array
        unset($data['image']);

        //Move | Store the uploaded image

        //Main Image
        $image_path = $request->file('image')->store('uploads/images', 'public');
        Image::make("storage/{$image_path}")->fit(1200, 800)->save();

        //Image Thumb
        $thumb_path = $request->file('image')->store('uploads/images/thumb', 'public');
        Image::make("storage/{$thumb_path}")->fit(400, 400)->save();

        //Persist Advert
        $advert = Advert::create($data);
        $advert->image()->create(['url' => "/storage/{$image_path}", 'thumb_url' => "/storage/{$thumb_path}"]);

        return redirect()->route('adverts.index');
    }

    public function destroy(Advert $advert)
    {
        //Delete the image and the thumbnail from the database
        File::delete([$advert->image->url, $advert->image->thumb_url]);

        //Delete the image from the database
        $advert->image()->delete();

        //Delete the advert from the database
        $advert->delete();

        //Redirect to the controller where there are other adverts
        return redirect()->route('adverts.index');

    }
}
