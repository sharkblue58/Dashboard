<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TagTranslation extends Model 
{
    use HasFactory;
    public $timestamps = false;   
    protected $fillable = ['tag_id','title', 'content','small_desc'];
}
