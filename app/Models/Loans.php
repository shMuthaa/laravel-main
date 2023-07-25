<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'loans';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'amount',
        'email',
        'reason',
    ];
}
