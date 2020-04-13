@extends('master')

@section('title','Edit Data')

@section('judul_halaman','Edit Data Mahasiswa')

@section('konten')
    <a href="/laravel-crud-kedua/public/mahasiswa" class="btn btn-danger">Kembali</a>
    <br/>
    <br/>

    <form action="/laravel-crud-kedua/public/mahasiswa/update/{{ $mahasiswa->id}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $mahasiswa->id }}"><br/>
        <div class="form-group">
            <label for="namamhs">Nama</label>
            <input type="text" name="namamhs" class="form-control" required="required" value="{{ $mahasiswa->nama }}"> <br/>
        </div>
        <div class="form-group">
            <label for="nimmhs">NIM</label>
            <input type="number" name="nimmhs" class="form-control" required="required" value="{{ $mahasiswa->nim }}"> <br/>
        </div>
        <div class="form-group">
            <label for="emailmhs">E-mail</label>
            <input type="email" name="emailmhs" class="form-control" required="required" value="{{ $mahasiswa->email }}"> <br/>
        </div>
        <div class="form-group">
            <label for="jurusanmhs">Jurusan</label>
            <input type="text" name="jurusanmhs" class="form-control" required="required" value="{{ $mahasiswa->jurusan }}"> <br/>
        </div>
        <button type="submit" name="edit" class="btn btn-primary float-right">Simpan Data</button>
    </form>
@endsection