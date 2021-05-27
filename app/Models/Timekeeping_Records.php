<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timekeeping_Records extends Model
{
    use HasFactory;

    protected $table = "timekeeping_records";

    protected $fillable = [
        'employee_id',
        'clockin',
        'clockout',
        'total',
        'timekeeping_record_id'

    ];
}
