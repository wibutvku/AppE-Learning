<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Lesson;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelases = Kelas::all();
        $lessons = Lesson::all();
        return view('content.admin.master-mapel', compact('lessons','kelases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //   $kelases = Kelas::all();
        $lessons = Lesson::all();
        return view('popup.admin.master-mapel.tambah-master-mapel', compact('lessons'));
    }

    // Show the form for creating a new teacherlesson

    // ! Bagian Tentukan Mapel Ada Dibawah

    public function createteacherlesson()
    {
        $lessons = Lesson::all();
        $teachers = Teacher::all();
        $kelas = Kelas::all();
        return view('popup.admin.data-pendidik.tentukan-mapel', compact('lessons', 'teachers', 'kelas'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'nama_lessons' => 'required',
        ]);

        Lesson::create($data);
        return redirect()->route('lessons.index');
    }

    // Store new lessons for teacher

    public function storeteacherlesson(Request $request)
    {
        $data = $request->validate([
            'teacher_id' => 'required',
            'lesson_id' => 'required',
            'kelas_id' => 'required',
    ]);

    $dataToCheck = DB::table('teacher_lesson')
                    ->where('teacher_id', $request->input('teacher_id'))
                    ->where('lesson_id', $request->input('lesson_id'))
                    ->where('kelas_id', $request->input('kelas_id'))
                    ->exists();

    if (!$dataToCheck) {
        // Simpan atau perbarui data
        DB::insert('INSERT INTO teacher_lesson(teacher_id, lesson_id, kelas_id) VALUES(?,?,?)',[
            $data['teacher_id'],
            $data['lesson_id'],
            $data['kelas_id'],
        ]);
    } else {
        // Tampilkan pesan error atau lakukan tindakan lain
        return redirect()->route('data-pendidik');
    }

    }
    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        //
        return view('popup.admin.master-mapel.tambah-master-mapel', compact('lesson'));
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
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->back();
    }
}
