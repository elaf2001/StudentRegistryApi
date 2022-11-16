<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'name',
        'email',
        'address',
        'studycourse'
    ];

    protected $hidden = [
    'email',
    'studycourse',
    'created_at',
    'updated_at',
    'id'];
}
