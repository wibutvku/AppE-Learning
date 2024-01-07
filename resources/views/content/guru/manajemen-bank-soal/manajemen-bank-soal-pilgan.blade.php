@extends('app-guru')
@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/layouts/guru/manajemen-bank-soal.css') }}">
@endpush

<div class="container-section">
    <div class="card-explanation">
        <h1>menu manajemen bank soal</h1>
    </div>
</div>
@if (session('success'))
<div></div>

@endif
<section class="sub-container-section">
    <div class="card-head-tabel">
        <h1>Soal pilihan ganda yang anda buat</h1>
        <div class="a-tag-tabel-bank-soal-ctn">
            <a class="btn-add-soal" href="{{ route('tambah-soal-pilgan') }}">
                <img class="icon-crud-guru-size" src="{{ asset('assets/img/add.png') }}" alt="">
                Add Soal
            </a>
            <a class="btn-upload-excel" href="{{ route('multiples.index') }}">
                <img class="icon-crud-guru-size" src="{{ asset('assets/img/upload.png') }}" alt="">
                Upload Excel
            </a>
            <a class="btn-contoh-excel" href="{{Route('download-pilgan')}}">
                <img class="icon-crud-guru-size" src="{{ asset('assets/img/excel.png') }}" alt="">
                Contoh Excel
            </a>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th class="no-th">No</th>
                <th class="soal-th">Soal</th>
                <th>Mapel</th>
                <th class="option-th">Pil A</th>
                <th class="option-th">Pil B</th>
                <th class="option-th">Pil C</th>
                <th class="option-th">Pil D</th>
                <th class="option-th">Pil E</th>
                <th class="option-th">Kunci</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($multiples as $soal )


            <tr>
                <td class="td-pilgan">{{ $soal->id }}</td>
                <td class="td-soal">{{ $soal->kalimat }}</td>
                <td>Nama Kelas</td>
                <td class="td-pilgan">{{ $soal->A }}</td>
                <td class="td-pilgan">{{ $soal->B }}</td>
                <td class="td-pilgan">{{ $soal->C }}</td>
                <td class="td-pilgan">{{ $soal->D }}</td>
                <td class="td-pilgan">{{ $soal->E }}</td>
                <td class="td-pilgan">{{ $soal->kunci }}</td>
                <td>
                    <a class="icon-crud-master" href="">
                        <img class="icon-crud-master-size-pilgan" src="{{ asset('assets/img/edit-pen.png') }}" alt="">
                        edit
                    </a>
                </td>
                <td>
                    <a class="icon-crud-master-delete" href="">
                        <img class="icon-crud-master-size-pilgan icon-delete-pilgan"
                            src="{{ asset('assets/img/trash-can.png') }}" alt="">
                        hapus
                    </a>
                </td>

            </tr>

            @empty
            <td>Data Kosong</td>
            @endforelse
        </tbody>
    </table>

    <div id="modal">
        <div>
            @yield('content-bank-soal')
        </div>
        <div>
            @yield('edit-materi-bank-soal')
        </div>
    </div>
</section>
@endsection