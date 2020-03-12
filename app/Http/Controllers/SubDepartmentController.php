<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class SubDepartmentController extends Controller
{
    public function create(Department $department)
    {
        return view('departments.sub.create', compact('department'));
    }

    public function store(Request $request, Department $department)
    {
        $data = $request->validate([
            'name' => ['required', 'unique:sub_departments', 'string', 'min:3',],
            'description' => ['required'],
        ]);

        $department->subDepartments()->create($data);

        return redirect()->route('departments.show', $department);
    }
}
