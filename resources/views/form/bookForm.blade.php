@extends('layout.main')
@section('title', 'home')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">BOOK FORM</h1>
            <p class="lead fw-normal text-white-50 mb-0">input book data</p>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <form action="/books" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Book Code</label>
                <input type="text" name="kode" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Book Title</label>
                <input type="text" name="name" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="form-label">Release Year</label>
                <input type="date" name="year" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Book Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Book Price</label>
                <input type="number" name="price" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Book Genre</label>
                <select class="form-select" name="genre" aria-label="Default select example">
                    <option selected>-- pilih role --</option>
                    @foreach ($data_genre as $data )
                    <option value="{{$data->id}}">{{ $data['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Book Cover</label>
                <input class="form-control" type="file" name="cover" id="formFile">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/book" class="btn btn-danger me-md-2" type="button">Cancel</a>
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection
