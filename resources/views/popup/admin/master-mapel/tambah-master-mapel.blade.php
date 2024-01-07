@extends('content.admin.master-mapel')
@section('content-materi')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/layouts/guru/modal-popup.css') }}">
    @endpush

    <div id="modal-ctn">
        <h1 class="head-modal">Tambah Mata Pelajaran</h1>
        <form action="{{route('lessons.store')}}" method="post">
            @csrf
            @method('post')
            <label>Nama Mata Pelajaran</label>
            <input type="text" name="nama_lessons" placeholder="isi nama mata pelajaran">
            <div class="btn-ctn">
            <a href="{{route('lessons.index')}}">Tutup</a>
            <button type="submit">Simpan</button>
        </div>
        </form>
     
    </div>

    <script src="{{ asset('assets/js/popup-modal.js') }}"></script>
@endsection
