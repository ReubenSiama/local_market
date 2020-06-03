<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    public function salaryPackage()
    {
        return $this->belongsTo(SalaryPackage::class);
    }
}
