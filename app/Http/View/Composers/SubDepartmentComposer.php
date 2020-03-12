<?php


namespace App\Http\View\Composers;


use App\SubDepartment;
use Illuminate\View\View;

class SubDepartmentComposer
{
    public function compose(View $view)
    {
        //Get all sub-departments
        $sub_departments = SubDepartment::orderBy('name', 'ASC')->get();

        $view->with('sub_departments', $sub_departments);
    }
}
