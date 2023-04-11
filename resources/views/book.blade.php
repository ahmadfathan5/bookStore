@extends('layout.main')
@section('title', 'home')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">BOOKS</h1>
            <p class="lead fw-normal text-white-50 mb-0">Whats You Need?</p>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5 card">
        <a href="/book/create" class="btn btn-primary">Tambah Data</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1
                @endphp
                @foreach ($data_buku as $data )
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $data->kode }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->year }}</td>
                    <td>{{ $data->author }}</td>
                    <td>{{ $data->genre }}</td>
                    <td>{{ $data->price }}</td>
                    <td>
                        <a href="/book/edit/{{$data->id}}" class="btn btn-warning">edit</a>
                        <form action="/books/{{ $data->id }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection