<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $items = Item::orderBy('created_at', 'DESC')->limit(4)->get();

        return view('pages.index', compact('items'));
    }

    public function test()
    {
        return view('pages.test');
    }
}
