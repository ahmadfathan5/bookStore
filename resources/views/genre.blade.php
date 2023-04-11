@extends('layout.main')
@section('title', 'home')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">GENRE</h1>
            <p class="lead fw-normal text-white-50 mb-0">Whats You Need?</p>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5 card">
        <a href="/genre/create" class="btn btn-primary">Tambah Data</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1
                @endphp
                @foreach ($data_genre as $data )
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $data['name'] }}</td>
                    <td>
                        <a href="/genre/edit/{{$data->id}}" class="btn btn-warning">edit</a>
                        <form action="/genres/{{ $data->id }}" method="post">
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