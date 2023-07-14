@extends('master')
@section('konten')

<div class="pageSection">
    @if (Session::has('status'))
        <x-alert message="{{ Session::get('message') }}" type="success"/>
    @endif
    
    <div class="pageTitle">
        <span>List Buku</span>
    </div>
    <div>
        <div class="d-flex justify-content-around mt-3 mb-3">
            <a class="btn btn-primary" href="/buku/tambah" role="button">Tambah Data</a>
            <a class="btn btn-primary invisible" role="button"></a>
            <a class="btn btn-info" href="/buku/deleted" role="button">List Deleted Data</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="keyword" placeholder="nama">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="tableContainer m-auto">
            <table class="table-div">
                <thead class="thead-primary">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $b)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $b->judul }}</td>
                            <td>{{ $b->penulis }}</td>
                            <td>{{ $b->penerbit }}</td>
                            <td>{{ $b->tahunTerbit }}</td>
                            <td>
                                <a class="btn btn-info" href="/buku/detail/{{$b->id}}">Detail</a>
                                <a class="btn btn-primary" href="/buku/edit/{{$b->id}}">Edit</a>
                                <a class="btn btn-danger" href="/buku/delete/{{$b->id}}">Delete</a>
                            </td>   
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection