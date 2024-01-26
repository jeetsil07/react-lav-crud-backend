<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //add employee
    public function addEmployee(Request $req){
        $empData = new Employee();
        $empData->name = $req->input('name');
        $empData->email = $req->input('email');
        $empData->company_id = $req->input('company_id');
        $empData->designation_id = $req->input('designation_id');

        $empData->save();
    }

    //show all employee
    public function showAllEmployee(){
        $allEmp = [];
        $allEmp = Employee::join('companies', 'employees.company_id', '=', 'companies.id')
        ->join('designations', 'employees.designation_id', '=', 'designations.id')
        ->select(
            'employees.*',
            'companies.company_name as company_name',
            'designations.designation as designation_name'
        )->get();
        return $allEmp;
    }
}
