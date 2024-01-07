<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Mockery\Undefined;
use App\Models\Multiple;
use Illuminate\Http\Request;
use App\Exports\MultipleExport;
use App\Imports\MultiplesImport;
use App\Models\Lesson;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class MultipleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $teachers = $user->teachers;
        $multiples = Multiple::all();
        return view('popup.guru.manajemen-bank-soal.pilih-mapel',compact('teachers' ,'multiples'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
 
    // export contoh soal pilihan ganda
    public function export()
    {
        return Excel::download(new MultipleExport, 'contoh-soal-pilgan.xlsx');
    }

    public function import(Request $request)
    {
        
        $request->validate([
            'file_soal' => 'required|mimes:xlsx,xls',
        ]);
        $file_soal = $request->file('file_soal');
        $file_name = time().'-' .$file_soal->getClientOriginalName();
        Return Excel::import(new MultiplesImport, $file_soal);
        // dd($file_soal);
        // return back();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'lesson_id' => 'required',
            'kelas_id' => 'required',
        ]);

        DB::insert('INSERT INTO multiple_lesson(lesson_id,kelas_id) VALUES(?,?)',[
            $data['lesson_id'],
            $data['kelas_id'],
        ]);

        return redirect()->route('upload-soal-pilgan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
