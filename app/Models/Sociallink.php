<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sociallink extends Model
{
    protected $fillable =['social_link', 'icon'];
    use HasFactory;
}
