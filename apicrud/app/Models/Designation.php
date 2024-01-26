<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    public function employee(){
        return $this->hasMany(Employee::class, 'company_id', 'id');
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }
    use HasFactory;
}
