<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_id',
        'teacher_id',
    ];

    public function lessons ()
    {
        return $this->belongsToMany(Lesson::class);
    }


}
