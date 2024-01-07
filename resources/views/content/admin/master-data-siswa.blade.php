@extends('app-admin')
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/layouts/admin/master-data-siswa.css') }}">
    @endpush
    <section class="container-section">
        <div class="card-explanation">
            <h1>Menu Data Siswa</h1>
        </div>
    </section>
    <section class="sub-container-section">
        <div class="card-head-tabel">
            <h1>Daftar Data Siswa</h1>
            <div class="a-tag-tabel-bank-soal-ctn-master">
                <!-- <a class="btn-contoh-excel" href="">
                    <img class="icon-master-data-siswa" src="{{ asset('assets/img/excel.png') }}" alt="">
                    Form Siswa
                </a> -->
                <a class="btn-upload-excel" href="{{ route('upload-data-siswa') }}">
                    <img class="icon-master-data-siswa" src="{{ asset('assets/img/upload.png') }}" alt="">
                    Download Data
                </a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                    @foreach($students as $student)
                    <td>{{$student->id}}</td>
                    <td>{{$student->nisn}}</td>
                    <td>{{$student->nama}}</td>
                    <td>{{$student->alamat}}</td>
                    <td>{{$student->jenis_kelamin}}</td>
                  @endforeach
                        <td>
                            <a class="icon-crud-master" href="">
                                <img class="icon-crud-master-size" src="{{ asset('assets/img/eye.png') }}" alt="">
                                view
                            </a>
                        </td>
                    </tr>

            </tbody>
        </table>
        <div id="modal">
            <div>
                @yield('content-materi')
            </div>
        </div>
    </section>
@endsection
