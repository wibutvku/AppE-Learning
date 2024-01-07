<?php

namespace App\Imports;

use App\Models\Lesson;
use App\Models\Multiple;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithUpsertColumns;
use Maatwebsite\Excel\Concerns\WithUpserts;

class MultiplesImport implements ToModel,WithHeadingRow,WithUpserts, WithUpsertColumns
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)

    {

        return new Multiple ([
                'kalimat' => $row['kalimat'],
                'A' => $row['a'],
                'B' => $row['b'],
                'C' => $row['c'],
                'D' => $row['d'],
                'E' => $row['e'],
                'kunci' => $row['kunci'],
            ]);
        
    }
    
    public function uniqueBy()
    {
        return [
            'kalimat',
            'A',
            'B',
            'C',
            'D',
            'E',
            'kunci',
        ];
    }

    public function upsert()
    {
        return true;
    }

    public function upsertColumns()
    {
        return ['kalimat','A','B','C','D','E','kunci'];
    }
}
