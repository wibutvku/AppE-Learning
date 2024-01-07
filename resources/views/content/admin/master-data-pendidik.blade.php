@extends('app-admin')
@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/layouts/admin/master-data-pendidik.css') }}">
@endpush
<section class="container-section">
    <div class="card-explanation">
        <h1>Menu Data Siswa</h1>
    </div>
</section>
<section class="sub-container-section">
    <div class="card-head-tabel">
        <h1>Daftar Data Pendidik / Guru</h1>
        <div class="a-tag-tabel-bank-soal-ctn-master-data-pendidik">
            <a class="btn-tentukan-mapel" href="{{route('lessons.createteacherlesson')}}">
                <img class="icon-master-data-pendidik" src="{{ asset('assets/img/excel.png') }}" alt="">
                Tentukan Mapel
            </a>
            <a class="btn-contoh-excel" href="">
                <img class="icon-master-data-pendidik" src="{{ asset('assets/img/excel.png') }}" alt="">
                Form Guru
            </a>
            <a class="btn-upload-excel" href="{{ route('upload-data-pendidik') }}">
                <img class="icon-master-data-pendidik" src="{{ asset('assets/img/upload.png') }}" alt="">
                Upload Data
            </a>

        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Guru Mapel</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
            <tr>

                <td>{{$teacher->id}}</td>
                <td>{{$teacher->nisn}}</td>
                <td>{{$teacher->nama}}</td>
                <td>{{$teacher->jenis_kelamin}}</td>
                <td>{{$teacher->jabatan}}</td>
                <td>

                    @foreach($teacher->lessons as $mapel)
                    <p class="style-td-nama-lessons">{{$mapel->nama_lessons}}</p>
                    @endforeach
                </td>
                <td>
                    <a class="icon-crud-master" href="">
                        <img class="icon-crud-master-size" src="{{ asset('assets/img/eye.png') }}" alt="">
                        view
                    </a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <div id="modal">
        <div>
            @yield('content-materi')
        </div>
    </div>
</section>
@endsection