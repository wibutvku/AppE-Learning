@extends('content.admin.master-kelas')
@section('content-materi')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/layouts/guru/modal-popup.css') }}">
    @endpush

    <div id="modal-ctn">
        <h1 class="head-modal">Tambah Kelas</h1>
        <form action="{{route('kelas.store')}}" method="post">
            @csrf
            @method('post')
            <label>Kode Kelas</label>
            <input type="text" name="kode_kelas" placeholder="isi kode kelas">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" placeholder="isi nama kelas">
            <div class="btn-ctn">
                <a href="{{route('kelas.index')}}">Tutup</a>
                <button type="submit">Simpan</button>
            </div>
        </form>
     
    </div>

    <script src="{{ asset('assets/js/popup-modal.js') }}"></script>
@endsection
