@extends('content.admin.master-data-pendidik')
@section('content-materi')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/layouts/guru/modal-popup.css') }}">
@endpush
<div id="modal-ctn">
    <h1 class="head-modal">Tentukan Mapel Guru</h1>
    <form action="{{route('lessons.storeteacherlesson')}}" method="POST">
        @csrf
        @method('post')
        <label>Cari Guru</label>
        <select name="teacher_id" class="select-ctn">
            @foreach ($teachers as $key => $value)
            <option value="{{$value->id}}" selected> {{ $value->nama}} </option>
            @endforeach
        </select>
        <select name="lesson_id" class="select-ctn">
            @foreach ($lessons as $key => $value)
            <option value="{{$value->id}}" selected> {{ $value->nama_lessons}} </option>
            @endforeach
        </select>
        <select name="kelas_id" class="select-ctn">
            @foreach ($kelas as $key => $value)
            <option value="{{$value->id}}" selected> {{ $value->nama_kelas}} </option>
            @endforeach
        </select>
        <div class="btn-ctn">
            <a href="{{route('data-pendidik')}}">Tutup</a>
            <button value="submit" type="submit">Submit</button>

        </div>

    </form>

</div>

<script src="{{ asset('assets/js/popup-modal.js') }}"></script>
@endsection