<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layouts/layouts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/table/table-soal-essay-pilgan.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/table/table-daftarsoal-ujian.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/table/table.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layouts/guru/beranda.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/halaman-siswa/menu-pilihan-ujian-siswa.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/halaman-siswa/menu-materi.css') }}">
    <title>Document</title>

</head>

<body>
    @auth
        @if (auth()->user()->role === 'siswa')
            <div class="flex">
                <div id="sidebar">
                    <h3 class="sidebar-text">E-Learning</h3>
                    <section>
                        <div class="user-link">
                            <img class="a-tag-image" src="{{ asset('assets/img/pengguna.png') }}" alt="">
                            <a href="#">Pengguna Aktif</a>
                        </div>
                        <h3 class="text-bagian-kelas">Menu Utama</h3>
                        <div class="list-kelas-link">
                            <div class="link-one">
                                <img class="a-tag-image" src="{{ asset('assets/img/beranda.png') }}" alt="">
                                <a href="">Ujian</a>
                            </div>
                            <div class="link-one">
                                <img class="a-tag-image" src="{{ asset('assets/img/beranda.png') }}" alt="">
                                <a href="{{ route('materi-siswa') }}">Materi</a>
                            </div>
                            <div class="link-one">
                                <img class="a-tag-image" src="{{ asset('assets/img/beranda.png') }}" alt="">
                                <a href="#">Video</a>
                            </div>
                        </div>
                    </section>
                </div>

                @include('components.navbar')
                @yield('content')
            @else
                <x-user-block-message>

                </x-user-block-message>
        @endif
    @endauth
</body>

</html>
