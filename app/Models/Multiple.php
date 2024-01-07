<?php

namespace App\Models;

use App\Imports\MultiplesImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Multiple extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'kalimat',
        'A',
        'B',
        'C',
        'D',
        'E',
        'kunci',  
        'file_soal',
    ];

    public function import()
    {
        Excel::import(new MultiplesImport, 'soal-piligan-ganda');
    }

    public function chose_multiple()
    {
        return $this->hasMany(Lesson::class,);
    }
}
