<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory;

    protected $table = "department";

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'age',
        'gender',
        'birthday',
        'contact',
        'address',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
