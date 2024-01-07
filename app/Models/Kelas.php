<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
    
        'nama_kelas',
        'kode_kelas',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
