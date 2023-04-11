@extends('layout.main')
@section('title', 'home')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">DATA ORDER</h1>
            <p class="lead fw-normal text-white-50 mb-0">Whats You Need?</p>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5 card">
        {{-- <a href="/book/create" class="btn btn-primary">Tambah Data</a> --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">user</th>
                    <th scope="col">order_date</th>
                    <th scope="col">Judul_buku</th>
                    <th scope="col">Author</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1
                @endphp
                @foreach ($data_order as $data )
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->order_date }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->author }}</td>
                    <td>Rp{{ $data->price }}</td>
                    <td>{{ $data->quantity }}</td>
                    <td>Rp{{ $data->quantity * $data->price }}</td> {{--masih hard code--}}
                    {{-- <td>
                        <a href="/book/edit/{{$data->id}}" class="btn btn-warning">edit</a>
                        <form action="/books/{{ $data->id }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection