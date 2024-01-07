<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layouts/layouts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layouts/guru/beranda.css') }}">

    @stack('styles')
    <title>Document</title>
</head>

<body>
    @auth

    @if (auth()->user()->role === 'admin')
    <div class="flex">
        <div id="sidebar">
            <h3 class="sidebar-text">E-Learning</h3>
            <section>
                <div class="user-link">
                    <img class="a-tag-image" src="{{ asset('assets/img/pengguna.png') }}" alt="">
                    <a href="{{ route('appAdmin') }}">Dashboard</a>
                </div>
                <div class="user-link">
                    <img class="a-tag-image" src="{{ asset('assets/img/pengguna.png') }}" alt="">
                    <a href="{{ route('pengguna-aktif') }}">Pengguna Aktif</a>
                </div>
                <h3 class="text-bagian-kelas">Master</h3>
                <div class="list-kelas-link">
                    <div class="link-one">
                        <img class="a-tag-image" src="{{ asset('assets/img/user.png') }}" alt="">
                        <a href="{{ route('data-siswa') }}">Data Siswa</a>
                    </div>
                    <div class="link-one">
                        <img class="a-tag-image" src="{{ asset('assets/img/whiteboard.png') }}" alt="">
                        <a href="{{ route('data-pendidik') }}">Data Pendidik</a>
                    </div>
                    <div class="link-one">
                        <img class="a-tag-image" src="{{ asset('assets/img/materi-siswa.png') }}" alt="">
                        <a href="{{ route('lessons.index') }}">Master Mapel</a>
                    </div>
                    <div class="link-one">
                        <img class="a-tag-image" src="{{ asset('assets/img/kelas.png') }}" alt="">
                        <a href="{{ route('kelas.index') }}">Master Kelas</a>
                    </div>
                    <hr />
                </div>
            </section>
        </div>
        <section class="cpanel-guru">

            <div class="beranda-ctn">
                <h1>beranda</h1>
            </div>
            <div id="ctn-card">

                <div class="card card-one">
                    <h6>Siswa Laki-laki</h6>
                    <hr>
                    <div class="flex-img">
                        <img class="cpanel-image" src="{{ asset('assets/img/kelas.png') }}" alt="">
                        <h1>1 kelas</h1>
                    </div>

                </div>
                <div class="card card-two">
                    <h6>Siswa Perempuan</h6>
                    <hr>
                    <div class="flex-img">
                        <h1>1 siswa</h1>
                        <img class="cpanel-image" src="{{ asset('assets/img/siswa.png') }}" alt="">
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

        @include('components.navbar')

        @yield('content')
    </div>
    @else
    <x-user-block-message>

    </x-user-block-message>
    @endif
    @endauth
    @stack('script')
    <script src="{{ asset('assets/js/dropdown.js') }}"></script>

</body>

</html>