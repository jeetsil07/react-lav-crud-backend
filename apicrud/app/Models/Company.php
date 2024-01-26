<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{   
    public function employee(){
        return $this->hasMany(Employee::class, 'company_id', 'id');
    }

    public function designation(){
        return $this->hasMany(Designation::class, 'company_id', 'id');
    }
    use HasFactory;
}
