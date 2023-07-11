@extends('master')
@section('konten')
    Tambah Prodi
    <x-alert message="ini tambah prodi" type="success"/>
     
    <div class="mt-5 col-8 m-auto">
        <form action="/prodi/store" method="post">
            @csrf
            <div class="mb-3">
                <label for="id">ID</label>
                <input type="number" class="form-control" name="id" id="id" minlength="4" maxlength="4" required>
            </div>
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="name" id="nama" required>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection