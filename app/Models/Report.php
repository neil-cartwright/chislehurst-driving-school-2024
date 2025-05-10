<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    // protected $primaryKey = 'log_id';

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
