<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslips extends Model
{
    use HasFactory;

    protected $table = "payslips";

    protected $fillable = [
        'cutoff_start',
        'cutoff_end'
        
    ];
}
