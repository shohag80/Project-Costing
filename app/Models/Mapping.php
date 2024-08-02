<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapping extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function description(){
        return $this->belongsTo(Description::class);
    }

    public function designation(){
        return $this->belongsTo(DesignaitonWithSalary::class, 'designaiton_with_salary_id');
    }
}
