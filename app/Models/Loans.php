<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    use HasFactory;

    protected $table = "employees";

    protected $fillable = [
        'loan_type',
        'amount',
        'months_payable',
        'employee_id',

    ];
}
