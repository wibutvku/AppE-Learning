@extends('app-siswa')
@section('content')
    <section class="cpanel-materi-siswa">
        <div class="materi-siswa-ctn">
            <h1> menu materi </h1>
        </div>
        <section class="tabel-data-materi-siswa">
            <div class="header-tabel-data-materi-siswa">
                <h1>Pilih Materi Sesuai Mata Pelajaran</h1>
            </div>
            <table>
                <thead>
                    <tr>
                        <th class="th-no">No</th>
                        <th class="th-mapel">Mata Pelajaran</th>
                        <th class="th-guru">Guru Pengajar</th>
                        <th class="th-lihat">Lihat Materi</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Apa itu website yang ada pada fasdfasfasojfnasjfalskdjfasjdlsj</td>
                        <td>Zulham Sitorus</td>
                        <td><a href="{{ route('pilihan-materi') }}">
                                <img class="lihat-materi-image" src="{{ asset('assets/img/search.png') }}" alt="">
                            </a>
                        </td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Apa itu browser</td>
                        <td>Amin</td>
                        <td><a href=""><img class="lihat-materi-image" src="{{ asset('assets/img/search.png') }}"
                                    alt="">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </section>
    </section>
    </div>
@endsection
