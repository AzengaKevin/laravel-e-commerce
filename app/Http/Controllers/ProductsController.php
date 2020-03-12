<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $items = Item::orderBy('created_at', 'DESC')->paginate(36);

        return view('products.index', compact('items'));
    }

    public function show(Item $item)
    {
        return view('products.show', compact('item'));
    }

    public function store(Request $request)
    {
        $query = Item::query();

        if ($request->has('needle') && !is_null($request->get('needle'))) {
            $needle = $request->get('needle');
            $query->where('name', 'LIKE', "%$needle%");
        }


        $items = $query->get();

        if ($request->has('department_id') && !is_null($request->get('department_id'))) {
            $items = $items->filter(function ($item) use ($request) {
                return $item->subDepartment->department->id == $request->get('department_id');
            });
        }

        return view('products.index', compact('items'));

    }
}
