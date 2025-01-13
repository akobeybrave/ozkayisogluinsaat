<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tadilat extends Model
{
    use HasFactory;

    protected $fillable = ['frontcontent', 'frontimage1', 'frontimage2', 'frontimage3', 'backcontent', 'pageimages'];
}
