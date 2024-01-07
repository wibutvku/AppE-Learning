<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nisn',
        'nama',
        'jabatan',
        'jenis_kelamin',
        'no_hp',
    ];


    public function user()
    {
    return $this->belongsToMany(User::class);
    }
   
    public function lessons()
    {
        return $this->belongsToMany(Lesson::class,'teacher_lesson');
    }
    public function kelas()
    {
        return $this->belongsToMany(Kelas::class,'teacher_lesson');
    }
}
