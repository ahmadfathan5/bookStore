@extends('layout.main')
@section('title', 'home')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Massage</h1>
            <p class="lead fw-normal text-white-50 mb-0">Ask Any think?</p>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5 card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama User</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Balasan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1
                @endphp
                @foreach ($data_pesan as $data )
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $data['user_id'] }}</td>
                    <td>{{ $data['massage'] }}</td>
                    <td>{{ $data['reply'] }}</td>
                    <td>
                        <a href="/massage/reply/{{$data->id}}" class="btn btn-primary">Reply</a>
                        <form action="/massages/{{ $data->id }}" method="post">
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
