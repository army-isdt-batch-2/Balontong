<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mandatorydeductions extends Model
{
    use HasFactory;

    protected $table = "deductions";

    protected $fillable = [
        'ph_id',
        'pi_id',
        'tax_id',
        'sss_id',
        'basic_range',
        'employer_share',
        'monthly_contribution'

    ];
}
