@extends('app-guru')
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/layouts/guru/manajemen-materi.css') }}">
    @endpush
    <section class="container-section">
        <div class="card-explanation">
            <h1>Menu Manajemen Materi</h1>
        </div>
    </section>
    <section class="sub-container-section">
        <div class="card-head-tabel">
            <h1>Daftar Materi Yang Anda Upload</h1>
            <div class="container-link">
                <a class="btn-link--sub-components-manajemen-materi" href="{{ route('halaman-tambah-materi') }}">
                    <img class="img-icon-size-container-link" src="{{ asset('assets/img/add.png') }}" alt="">
                    Tambah Data
                </a>
            </div>

        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Materi</th>
                    <th>Mapel</th>
                    <th>Kelas</th>
                    <th>File</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kegiatan</td>
                    <td>Jaringan</td>
                    <td>XTKJ</td>
                    <td>
                        <a class="icon-crud-master file" href="">
                            <img class="icon-crud-master-size-ujian" src="{{ asset('assets/img/google-docs.png') }}"
                                alt="">
                            file
                        </a>
                    </td>
                    <td>
                        <a class="icon-crud-master" href="">
                            <img class="icon-crud-master-size-ujian" src="{{ asset('assets/img/edit-pen.png') }}"
                                alt="">
                            edit
                        </a>
                    </td>
                    <td>
                        <a class="icon-crud-master-delete" href="">
                            <img class="icon-crud-master-size-ujian icon-delete"
                                src="{{ asset('assets/img/trash-can.png') }}" alt="">
                            hapus
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div id="modal">
            <div>
                @yield('content-materi')
            </div>
            <div>
                @yield('edit-materi')
            </div>
        </div>

    </section>
@endsection
