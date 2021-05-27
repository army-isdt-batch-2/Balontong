<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory;

    protected $table = "employees";

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'contact',
        'address',
        'birthday',
        'gender',
       
    ];

}