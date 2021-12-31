<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personalinfo extends Model
{
    protected $fillable =[
        'name','profile','email','phone','profile_image'
    ];
    use HasFactory;
}
