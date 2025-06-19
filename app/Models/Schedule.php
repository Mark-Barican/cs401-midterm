<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'day_of_week',
        'time_slot',
        'room',
        'term',
    ];

    protected $casts = [
        'time_slot' => 'datetime',
    ];
}
