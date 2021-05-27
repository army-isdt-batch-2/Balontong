<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function departments()
    {
        return view('departments')->with([
            'data' => Department::all()
        ]);
    }

    public function departments_create()
    {
        return view('create_form.departments');
    }

    public function save()
    {
            $data = $this->request->except('_token');
    
            Department::create($data);
    
            return Redirect::route('departments');
    }
}
