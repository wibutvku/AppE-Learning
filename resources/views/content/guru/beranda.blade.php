@extends('app-guru')
@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/layouts/guru/beranda.css') }}">
@endpush
<section class="cpanel-guru">
    <div class="beranda-ctn">
        <h1>beranda</h1>
    </div>
    <div id="ctn-card">

        <div class="card card-one">
            <h6>kelas yang di ampu</h6>
            <hr>
            <div class="flex-img">
                <img class="cpanel-image" src="{{ asset('assets/img/kelas.png') }}" alt="">
                <h1>1 kelas</h1>
            </div>

        </div>
        <div class="card card-two">
            <h6>siswa binaan</h6>
            <hr>
            <div class="flex-img">
                <img class="cpanel-image" src="{{ asset('assets/img/siswa.png') }}" alt="">
                <h1>1 siswa</h1>
            </div>
        </div>
        <div class="card card-three">
            <h6>mapel yang di ampu</h6>
            <hr>
            <div class="flex-img">
                <img class="cpanel-image" src="{{ asset('assets/img/mapel.png') }}" alt="">
                <h1>1 mapel</h1>
            </div>
        </div>
        <div class="card card-four">
            <h6>upload materi</h6>
            <hr>
            <div class="flex-img">
                <img class="cpanel-image" src="{{ asset('assets/img/materi.png') }}" alt="">
                <h1>1 materi</h1>
            </div>
        </div>
    </div>
</section>

<section class="tabel-data-mapel-guru">
    <div class="header-tabel-data-mapel-guru">
        <h1>mata pelajaran yang di ampu ta. 2023/2024</h1>
        <p class="" style="margin: 1.5rem 0 0 19rem; font-style:italic; font-size:.9rem;">*menu dibawah merupakan data
            mengajar
            anda</p>
    </div>
    <table>
        <thead>
            <tr>
                <th class="th-no">No</th>
                <th class="th-nama">Nama Mapel</th>
                <th class="th-no">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>
                    @foreach ($teacher->lessons as $kelas)
                    <p class="style-td-nama-lessons">{{ $kelas->nama_lessons }}</p>
                    @endforeach
                </td>
                <td>
                    @foreach ($teacher->kelas as $item)
                    <p class="style-td-nama-lessons">
                        {{ $item->kode_kelas}}
                    </p>
                    @endforeach
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</section>
</div>

</html>
@endsection