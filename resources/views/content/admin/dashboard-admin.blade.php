@extends('app-admin')
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
                <h6>Siswa Laki-laki</h6>
                <hr>
                <div class="flex-img">
                    <img class="cpanel-image"src="{{ asset('assets/img/kelas.png') }}" alt="">
                    <h1>1 kelas</h1>
                </div>

            </div>
            <div class="card card-two">
                <h6>Siswa Perempuan</h6>
                <hr>
                <div class="flex-img">
                    <img class="cpanel-image" src="{{ asset('assets/img/siswa.png') }}" alt="">
                    <h1>1 siswa</h1>
                </div>
            </div>
            <div class="card card-three">
                <h6>Jumlah Ujian</h6>
                <hr>
                <div class="flex-img">
                    <img class="cpanel-image" src="{{ asset('assets/img/mapel.png') }}" alt="">
                    <h1>1 mapel</h1>
                </div>
            </div>
            <div class="card card-four">
                <h6>Soal Tersedia</h6>
                <hr>
                <div class="flex-img">
                    <img class="cpanel-image" src="{{ asset('assets/img/materi.png') }}" alt="">
                    <h1>400 Soal</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
