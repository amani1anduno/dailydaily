<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class winner extends Model
{
    use HasFactory;
    protected $fillable=[
        'content',
        'points',
        'win_date',

    ];
}
