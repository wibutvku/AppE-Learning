<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/layouts/guru/modal-popup.css') }}">
</head>
<body>
<div id="modal-ctn-confirm">
    <h1 class="head-modal">Lengkapi Data Anda</h1>
        <form action="{{route('check-role')}}" method="post">
            @csrf
            @method('post')
            <label>users_id</label>
            <input type="text" name="user_id" value="{{auth()->user()->id}}" readonly>
            <label>Nisn</label>
            <input type="text" name="nisn">
            <label>Nama</label>
            <input type="text" name="nama" value="{{auth()->user()->nama}}" readonly>
            <label>Jabatan</label>
            <input type="text" name="jabatan" value="{{auth()->user()->role}}" readonly>  
            <label>Alamat</label>
            <input type="text" name="alamat">
            <label>Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" >  
            <label>No HP</label>
            <input type="text" name="no_hp" >
            <!-- <div class="btn-ctn">    -->
            <button type="submit">Simpan</button>
        <!-- </div> -->
        </form>
      
    </div> 
</body>
</html>


