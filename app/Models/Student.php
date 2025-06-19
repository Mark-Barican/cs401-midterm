<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'program',
        'enrollment_year',
        'birthday',
    ];

    protected $casts = [
        'birthday' => 'datetime',
    ];

    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getAgeAttribute(): int
    {
        return now()->diffInYears($this->birthday);
    }
}
