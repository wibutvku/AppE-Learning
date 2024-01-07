@extends('app-admin')
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/layouts/admin/master-data-siswa.css') }}">
    @endpush
    <section class="container-section">
        <div class="card-explanation">
            <h1>Menu Pengguna Aktif</h1>
        </div>
    </section>
    <section class="sub-container-section">
        <div class="card-head-tabel">
            <h1>Pengguna Aktif</h1>
            <div class="a-tag-tabel-bank-soal-ctn-master">
                <a class="btn-contoh-excel" href="">
                    <img class="icon-master-data-siswa" src="{{ asset('assets/img/excel.png') }}" alt="">
                    Form Siswa
                </a>
                <a class="btn-upload-excel" href="{{ route('upload-data-siswa') }}">
                    <img class="icon-master-data-siswa" src="{{ asset('assets/img/upload.png') }}" alt="">
                    Upload Data
                </a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>Level</th>
                    <th>Edit</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>nama-username</td>
                    <td>nama-lengkap</td>
                    <td>nama-level</td>
                    <td>
                        <a class="icon-crud-master" href="">
                            <img class="icon-crud-master-size" src="{{ asset('assets/img/eye.png') }}" alt="">
                            edit
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
