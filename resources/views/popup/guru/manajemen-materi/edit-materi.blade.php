@extends('content.guru.manajemen-materi.manajemen-materi')
@section('edit-materi')
    <link rel="stylesheet" href="{{ asset('assets/css/layouts/guru/modal-popup.css') }}">

    <div>
        <div id="modal-ctn">
            <h1 class="head-modal">Edit Materi</h1>
            <form action="">
                <label>Judul Materi</label>
                <input type="text" placeholder="ubah judul materi">
                <label>Mata Pelajaran</label>
                <input type="text" placeholder="ubah mata pelajaran ">
                <label>Kelas</label>
                <input type="text" placeholder="ubah kelas">
                <label>File</label>
                <input type="file">
            </form>
            <div class="btn-ctn">
                <a href="{{ URL::previous() }}">Tutup</a>
                <button type="submit">Simpan</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/popup-modal.js') }}"></script>
@endsection
