<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'fname'=>$row[0],
            'lname'=>$row[1],
            'email'=>$row[2],
            'dob'=>$row[3],
        ]);
    }
}
