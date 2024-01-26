<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function addCompany(Request $req){
        $companyName = new Company();
        $companyName->company_name = $req->input('companyName');
        $companyName->save();
    }

    //show company data
    public function showCmpData(){
        $cmpData = [];
        $cmpData = Company::all();
        return $cmpData;
    }
}
