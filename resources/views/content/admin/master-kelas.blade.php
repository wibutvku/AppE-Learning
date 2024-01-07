@extends('app-admin')
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/layouts/admin/master-kelas.css') }}">
    @endpush
    <section class="container-section">
        <div class="card-explanation">
            <h1>menu master kelas</h1>
        </div>
    </section>
    <section class="sub-container-section">
        <div class="card-head-tabel">
            <h1>Daftar Master Kelas</h1>
            <div class="container-link">
                <a class="btn-link--sub-components-tambah-data" href="{{ route('kelas.create') }}">
                    <img class="img-icon-size-container-link" src="{{ asset('assets/img/add.png') }}" alt="">
                    Tambah Data
                </a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th class="th-nomor">No</th>
                    <th class="th-judul">Kode Kelas</th>
                    <th class="th-mapel">Nama Kelas</th>
                    <th class="th-icon">Edit</th>
                    <th class="th-icon">Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kelases as $kela)
                <tr>
                    <td>{{$kela->id}}</td>
                    <td>{{$kela->kode_kelas}}</td>
                    <td>{{$kela->nama_kelas}}</td>
                    <td>
                        <a class="icon-crud-master" href="">
                            <img class="icon-crud-master-size" src="{{ asset('assets/img/edit-pen.png') }}" alt="">
                            edit
                        </a>    
                    </td>
                    <td>
                        <form action="{{route('kelas.destroy', $kela)}}" method="post">
                            @csrf
                            @method('delete')
                                <button class="icon-crud-master-delete" type="submit">
                                <img class="icon-crud-master-size icon-delete" src="{{ asset('assets/img/trash-can.png') }}"
                                    alt="">
                                hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div id="modal">
            <div>
                @yield('content-materi')
            </div>
            <div>
                @yield('edit-master-kelas')
            </div>
        </div>
    </section>
    </div>
@endsection
