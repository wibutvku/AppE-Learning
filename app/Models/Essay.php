<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essay extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_id',
        'kalimat',
        'kunci',
    ];

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }
}
