@extends('master')

@section('title','Tambah Data')

@section('judul_halaman','Tambah Data Mahasiswa')

@section('konten')
	<a href="/laravel-crud-kedua/public/mahasiswa" class="btn btn-danger">Kembali</a>
	<br/>
	<br/>
	<form action="/laravel-crud-kedua/public/mahasiswa/simpan" method="post">
	        {{ csrf_field() }}
	        <div class="form-group">
	            <label for="namamhs">Nama</label>
	            <input type="text" class="form-control" required="required" name="namamhs"> <br>
	        </div>
	        <div class="form-group">
	            <label for="nimmhs">NIM</label>
	            <input type="number" class="form-control" required="required" name="nimmhs"> <br>
	        </div>
	        <div class="form-group">
	            <label for="emailmhs">E-mail</label>
	            <input type="email" class="form-control" required="required" name="emailmhs"> <br>
	        </div>
	        <div class="form-group">
	            <label for="jurusanmhs">Jurusan</label>
	            <input type="text" class="form-control" required="required" name="jurusanmhs"> <br>
	        </div>
	        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
	    </form>
@endsection