<?php

namespace App\Http\Controllers;

use App\Image;
use App\Item;
use App\SubDepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ImageIntervention;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $items = Item::orderBy('created_at', 'DESC')->get();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:256', 'unique:items'],
            'sub_department_id' => ['required'],
            'cost' => ['required'],
            'description' => ['required', 'min:10', 'max:400'],
            'stock' => ['required'],
            'store_location' => ['required', 'min:10', 'max:400'],
        ]);

        //Validating Images
        $request->validate([
            'images.*' => ['mimes:png,jpeg,jpg,bmp'],
        ]);

        //Persist the Item to DB
        $item = Item::create(array_merge($data, ['discount' => 0]));

        $images = collect($request->file('images'));

        //Uploading and Saving Images and sizing if any
        $images->each(function ($image) use ($item) {
            //Store and resize large image
            $url = $image->store('uploads/images', 'public');
            ImageIntervention::make(public_path("storage/{$url}"))->fit(800, 800)->save();

            //Store and resize the thumbnail
            $thumb_url = $image->store('uploads/images/thumbnails', 'public');
            ImageIntervention::make(public_path("storage/{$thumb_url}"))->fit(400, 400)->save();

            $item->images()->create(['url' => $url, 'thumb_url' => $thumb_url]);
        });

        return redirect()->route('items.index');
    }

    public function show()
    {

    }
}
