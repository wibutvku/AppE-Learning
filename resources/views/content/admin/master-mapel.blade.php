@extends('app-admin')
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/layouts/admin/master-mapel.css') }}">
    @endpush
    <section class="container-section">
        <div class="card-explanation">
            <h1>menu master mapel </h1>
        </div>
    </section>
    <section class="sub-container-section">
        <div class="card-head-tabel">
            <h1>Daftar Master Mata Pelajaran</h1>
            <div class="container-link">
                <a class="btn-link--sub-components-tambah-data" href="{{ route('lessons.create') }}">
                    <img class="img-icon-size-container-link" src="{{ asset('assets/img/add.png') }}" alt="">
                    Tambah Data
                </a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th class="th-nomor">No</th>
                    <th class="th-mapel">Nama Mapel</th>
             
                    <th class="th-icon">Hapus</th>
                </tr>
            </thead>
            <tbody>
            
                @foreach($lessons as $lesson)
                <tr>
                    <td>{{$lesson->id}}</td>
                    <td class="td-nama-lessons">{{$lesson->nama_lessons}}</td>
                    <!-- <td>
                        <a class="icon-crud-master" href="">
                            <img class="icon-crud-master-size" src="{{ asset('assets/img/edit-pen.png') }}" alt="">
                            edit
                        </a>
                    </td> -->
                    <td class="td-delete">
                        <form action="{{route('lessons.destroy', $lesson)}}" method="post">
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
                @yield('master-register')
            </div>
        </div>
    </section>
    </div>
@endsection
