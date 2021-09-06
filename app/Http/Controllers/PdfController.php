<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;

class PdfController extends Controller
{
    public function index()
    {
        $employee = Employee::paginate(15);
        return view('pdf.index',[
            'employees'=>$employee
        ]);
    }
    public function filePdf()
    {
        $employee = Employee::paginate(15);
        $pdf = PDF::loadView('pdf.index',['employees'=>$employee])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('employees.pdf');
    }
}
