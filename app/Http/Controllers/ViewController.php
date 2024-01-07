<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Lesson;
use App\Models\Multiple;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ViewController extends Controller
{
    //
    public function login ()
    {
        return view ('login');
    }

    public function testing () 
    {
      return view('testing');
    }

    public function app ()
    {
        return view ('layouts.app');
    }
    public function appAdmin ()
    {
      
      return view('app-admin');
    }
    public function registerAkun()
    {
      return view('content.admin.master-register');
    }
    public function appGuru ()
    {
      return view('app-guru');
    }
    public function appSiswa ()
    {
      return view('app-siswa');
    }
    public function berandaGuru ()
    {
        $user = Auth::user();
        $teachers = $user->teachers;
        $kelas = $user->kelas;
        return view('content.guru.beranda', compact('teachers', 'kelas'));
    }
    
    // Halaman Master Data Siswa
    public function masterDataSiswa ()
    {
      $students = Student::all();
      return view('content.admin.master-data-siswa', compact('students'));
    }

    // Halaman Master Data Pendidik
    public function masterDataPendidik ()
    {
      $lesson = Teacher::with('lessons')->get();

      $teachers = Teacher::all();
      // dd($lesson);
      return view('content.admin.master-data-pendidik', compact('teachers','lesson'));
    }
    public function masterKelasAdmin ()
    {
      $kelases = Kelas::all();
      return view('content.admin.master-kelas', compact('kelases'));
    }
  
    public function masterPenggunaAktif()
    {
      return view('content.admin.master-pengguna-aktif');
    }

    public function materiSiswa ()
     {
        return view('content.siswa.materi-siswa');
     }

     public function manajemenMateri()
     {
         return view('content.guru.manajemen-materi.manajemen-materi');
     }

    //  ttambah materi halaman pop out
    public function tambahMateri()
    {
      return view('popup.guru.manajemen-materi.tambah-materi');
    }
    public function editMateri()
    {
      return view('popup.guru.manajemen-materi.edit-materi');
    }
     public function pilihanMateri () {
        return view('content.siswa.pilihan-materi');
     }


     public function manajemenBankSoalPilgan ()
     {
       $multiples = Multiple::all();
        return view('content.guru.manajemen-bank-soal.manajemen-bank-soal-pilgan',compact('multiples'));
     }

     public function manajemenBankSoalEssay ()
     {
        return view('content.guru.manajemen-bank-soal.manajemen-bank-soal-essay');
     }

     public function manajemenUjian ()
     {
        return view('content.guru.manajemen-ujian.manajemen-ujian');
     }
    
     public function lihatSoalUjian ()
     {
        return view('content.guru.manajemen-ujian.daftarsoal-ujian');
     }

     public function tambahTopikUjian() 
     {
      return view('popup.guru.manajemen-ujian.tambah-ujian');
     }
     public function soalEssay ()
     {
      return view('content.guru.manajemen-ujian.tipe-soal.soal-essay');
     }

     public function soalPilgan ()
     {
      return view('content.guru.manajemen-ujian.tipe-soal.soal-pilihan-ganda');
     }

    //  Admin
    // data siswa - upload data siswa
    public function uploadDataSiswa() 
    {
      $users = User::with('roles')->get();
      return view('popup.admin.data-siswa.upload-data-siswa', compact('users'));
    }

    // data pendidik - upload data pendidik
    public function uploadDataPendidik()
    {
      return view('popup.admin.data-pendidik.upload-data-pendidik');
    }
    
    // TASK SELANJUTNYA !!!
    // master kelas - tambah nama kelas
    public function tambahMasterKelas()
    {
      $kelases = Kelas::all();

      return view('popup.admin.master-kelas.tambah-master-kelas',compact('kelases'));
    } 
    // master kelas - edit master kelas
    public function editMasterKelas()
    {
      return view('popup.admin.master-kelas.edit-master-kelas');
    }

    // Guru
    // Manajemen bank soal
    // -- upload soal essay 
    public function uploadSoalEssay()
    {
      return view('popup.guru.manajemen-bank-soal.upload-soal-essay');
    }
    // tambah soal essay
    public function tambahSoalEssay () 
    {
      return view('popup.guru.manajemen-bank-soal.tambah-soal-essay');
    }
    // -- upload soal pilgan
    public function uploadSoalPilgan()
    {
      // $lessons= Lesson::with('multiples')->get()
      $user = Auth::user();
      $teachers = $user->teachers;
      // $multiples = Multiple::all();;
      $multiples = Multiple::with('lessons')->get();
      return view('popup.guru.manajemen-bank-soal.upload-soal-pilgan', compact('multiples', 'teachers'));
    }

     // tambah soal pilgan
     public function tambahSoalPilgan () 
     {
       return view('popup.guru.manajemen-bank-soal.tambah-soal-pilgan');
     }

     public function confirmRole()
     {
      $users = User::all();
      return view('popup.confirm-role', compact('users'));
     }

}
