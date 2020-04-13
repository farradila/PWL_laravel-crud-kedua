@extends('master')

@section('title', 'Detail Mahasiswa')

@section('judul_halaman','Detail Data Mahasiswa')

@section('konten')
	<a href="/laravel-crud-kedua/public/mahasiswa" class="btn btn-danger">Kembali</a>
	<br/>
	<br/>


	<h5 class="card-title">{{ $mahasiswa->nama }}</h5>
	<p class="card-text">
		<label for=""><b>NIM : </b></label>
		{{ $mahasiswa->nim}}
	</p>
	<p class="card-text">
		<label for=""><b>E-Mail : </b></label>
		{{ $mahasiswa->email}}
	</p>
	<p class="card-text">
		<label for=""><b>Jurusan : </b></label>
		{{ $mahasiswa->jurusan}}
	</p>
@endsection