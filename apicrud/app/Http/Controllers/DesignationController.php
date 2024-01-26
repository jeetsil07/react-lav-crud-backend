<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Hamcrest\Arrays\IsArray;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function addDesg(Request $req){
        $designation = new Designation();
        $designation->designation = $req->input('designation');
        $designation->company_id = $req->input('company_id');
        $designation->save();
    }

    //show designation by company id
    public function showDesg($company_id){
        $designations = [];
        $designations = Designation::where('company_id' ,'=', $company_id)->get();
        return $designations;
    }
}
