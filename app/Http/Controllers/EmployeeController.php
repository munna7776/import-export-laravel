<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeesExport;
use App\Imports\EmployeesImport;
use App\Models\Employee;
use PDF;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::paginate(15);
        return view('welcome',[
            'employees'=>$employee
        ]);
    }
    public function fileImport(Request $req)
    {
        Excel::import(new EmployeesImport,$req->file('file')->store('temp'));
        return back()->with('message','You have successfully imported the files');
    }
    public function fileExport()
    {
        return Excel::download(new EmployeesExport,'employee-collection.xlsx');
    }
}
