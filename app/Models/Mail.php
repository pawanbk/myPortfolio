<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = ['name','subject', 'from', 'message'];
    use HasFactory;
}
