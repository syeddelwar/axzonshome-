<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cdpap extends Model
{
    use HasFactory;
   
    public $fillable = [
        'first_name', 'last_name', 'phone', 'email', 'patient','medicaid','joinmedicate'
    ];

}
