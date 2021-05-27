<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('login');
    }

    public function table()
    {
        return view('table');
    }

    public function layout()
    {
        return view('layout');
    }
    
    
    
    public function employees()
    {
        return view('employees');
    }
    
    public function loans()
    {
        return view('loans');
    }

    public function leaves()
    {
        return view('leaves');
    }
    
    public function mandatorydeductions()
    {
        return view('mandatorydeductions');
    }
    
    public function timekeeping()
    {
        return view('timekeeping');
    }
    
    public function payslips()
    {
        return view('payslips');
    }
    
    public function form()
    {
        return view('form');
    }
    
    
    
    public function employees_create()
    {
        return view('create_form.employees');
    }
    
    public function leaves_create()
    {
        return view('create_form.leaves');
    }
    
    public function loans_create()
    {
        return view('create_form.loans');
    }
    
    public function mandatorydeductions_create()
    {
        return view('create_form.mandatorydeductions');
    }
    
    public function payslips_create()
    {
        return view('create_form.payslips');
    }
    
    public function timekeeping_create()
    {
        return view('create_form.timekeeping');
    }

    public function payslips_view()
    {
        return view('view.payslips');
    }
    
    public function timekeeping_view()
    {
        return view('view.timekeeping');
    }

   

}
