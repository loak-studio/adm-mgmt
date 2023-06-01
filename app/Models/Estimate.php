<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'reference',
        'tax_rate',
        'issue_date',
        'due_date',
    ];
}