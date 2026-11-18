<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $casts = [
        'progress' => 'array', // or 'json'
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
