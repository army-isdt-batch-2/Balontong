<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaves extends Model
{
    use HasFactory;

    protected $table = "leaves";

    protected $fillable = [
        'leave_type',
        'start',
        'end',
        'notes',
        'employee_id',

    ];
}
