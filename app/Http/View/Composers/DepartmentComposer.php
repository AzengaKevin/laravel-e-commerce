<?php


namespace App\Http\View\Composers;


use App\Department;
use Illuminate\View\View;

class DepartmentComposer
{
    public function compose(View $view)
    {
        $departments = Department::orderBy('name')->get();

        $view->with('departments', $departments);
    }
}
