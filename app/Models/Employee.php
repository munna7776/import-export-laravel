<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=[
        'fname',
        'lname',
        'email',
        'dob'
    ];
    protected $hidden = ['created_at','updated_at'];
}
