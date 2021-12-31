<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitesetting extends Model
{
    protected $fillable = [
        'hero_img','title','sub_title','resume','about_desc1','about_desc2'
    ];
    use HasFactory;
}
