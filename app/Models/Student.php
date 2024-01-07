<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nisn',
        'nama',
        'jabatan',
        'alamat',
        'jenis_kelamin',
        'no_hp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class);    
    }
}
