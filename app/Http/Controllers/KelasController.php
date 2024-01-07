<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelases = Kelas::all();
        return view('content.admin.master-kelas', compact('kelases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelases = Kelas::all();
        return view('popup.admin.master-kelas.tambah-master-kelas', compact('kelases'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $data = $request->validate([
            'kode_kelas' => 'required',
            'nama_kelas' => 'required',
        ]);

        Kelas::create($data);
        return redirect()->back();
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
    public function destroy(Kelas $kela)
    {
        $kela->delete();
        // $kelases = DB::table('kelas')->select('id')->get();
        return redirect()->back();
        
    }
}
