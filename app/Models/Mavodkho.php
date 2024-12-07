<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mavodkho extends Model
{
    use HasFactory;
    protected $quarded = false;
    protected $fillable = ['mavod','shumora','narkh'];
}
