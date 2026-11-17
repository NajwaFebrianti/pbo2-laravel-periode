<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'periode';
    protected $guarded = [];

    protected $casts = [
        'status' => 'boolean',
    ];
}
