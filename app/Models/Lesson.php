<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lessons',
    ];
    
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function students ()
    {
        return $this->belongsToMany(Student::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function essays ()
    {
        return $this->hasMany(Essay::class);
    }

    public function multiples()
    {
        return $this->belongsToMany(Multiple::class);
    }

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'teacher_lesson');
    }
}
