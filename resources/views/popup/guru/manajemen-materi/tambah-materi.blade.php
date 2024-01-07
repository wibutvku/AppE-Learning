@extends('content.guru.manajemen-materi.manajemen-materi')
@section('content-materi')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/layouts/guru/modal-popup.css') }}">
    @endpush

    <div id="modal-ctn">
        <h1 class="head-modal">Tambah Materi</h1>
        <form action="">
            <label>Judul Materi</label>
            <input type="text" placeholder="isi judul materi">
            <label>Mata Pelajaran</label>
            <input type="text" placeholder="isi mata pelajaran">
            <label>Kelas</label>
            <input type="text" placeholder="isi kelas">
            <label>File</label>
            <input type="file" placeholder="isi judul materi">
        </form>
        <div class="btn-ctn">
            <a href="{{ URL::previous() }}">Tutup</a>
            <button type="submit">Simpan</button>
        </div>
    </div>

    <script src="{{ asset('assets/js/popup-modal.js') }}"></script>
@endsection
