@extends('layout.main')
@section('title', 'home')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">USER</h1>
            <p class="lead fw-normal text-white-50 mb-0">Whats You Need?</p>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5 card">
        <a href="#" class="btn btn-primary">Tambah Data</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1
                @endphp
                @foreach ($data_user as $data )
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $data['name'] }}</td>
                    <td>{{ $data['email'] }}</td>
                    <td>{{ $data['role'] }}</td>
                    <td>{{ $data['phone'] }}</td>
                    <td>{{ $data['address'] }}</td>
                    <td>
                        detail | update | delet
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection