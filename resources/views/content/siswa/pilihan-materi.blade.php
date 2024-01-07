@extends('app-siswa')
@section('content')
    <section class="cpanel-pilihan-materi-siswa">
        <div class="pilihan-materi-siswa-ctn">
            <h1> materi </h1>
        </div>
        <div class="sub--ctn">
            <h1>Mata Pelajaran <span>:</span></h1>
            <h1>Guru Pengajar <span>:</span></h1>
            <a class="btn-back-sub--ctn" href="{{ route('materi-siswa') }}">Kembali</a>
        </div>
        <section class="tabel-data-pilihan-materi-siswa">
            <div class="header-tabel-data-pilihan-materi-siswa">
                <h1>Pilih Materi Sesuai Mata Pelajaran</h1>
            </div>
            <table>
                <thead>
                    <tr>
                        <th class="th-no">No</th>
                        <th class="th-judul">Judul Materi</th>
                        <th class="th-unduh">Unduh Materi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Apa itu website</td>
                        <td><a href="">
                                <img class="icon-unduh" src="{{ asset('assets/img/download.png') }}" alt="">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Apa itu browser</td>
                        <td><a href="">
                                <img class="icon-unduh" src="{{ asset('assets/img/download.png') }}" alt="">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </section>
    </section>
@endsection
