<?php

namespace App\Models;


use App\Models\Role;
use App\Models\Student;
use App\Models\Teacher;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'password',
        'role',
    ];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class,'kode_kelas');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'id');
    }

    
}
