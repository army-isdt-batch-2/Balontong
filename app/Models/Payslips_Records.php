<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslips_Records extends Model
{
    use HasFactory;

    protected $table = "payslip_records";

    protected $fillable = [
        'payslip_id',
        'data',
        'employee_id'
        
    ];
}
