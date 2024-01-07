@extends('content.admin.master-kelas')
@section('edit-master-kelas')
    <link rel="stylesheet" href="{{ asset('assets/css/layouts/guru/modal-popup.css') }}">

    <div>
        <div id="modal-ctn">
            <h1 class="head-modal">Edit Master Kelas</h1>
            <form action="">
                <label>Nama Kelas</label>
                <input type="text" placeholder="ubah nama kelas">
            </form>
            <div class="btn-ctn">
                <a href="{{ URL::previous() }}">Tutup</a>
                <button type="submit">Simpan</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/popup-modal.js') }}"></script>
@endsection
