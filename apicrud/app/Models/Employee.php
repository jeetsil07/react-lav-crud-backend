<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function designation(){
        return $this->belongsTo(Designation::class);
    }
    use HasFactory;
}
