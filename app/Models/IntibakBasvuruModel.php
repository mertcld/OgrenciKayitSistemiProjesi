<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class IntibakBasvuruModel extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'alinan_dersler' => 'array',
        'sorumlu_dersler' => 'array'
    ];
}