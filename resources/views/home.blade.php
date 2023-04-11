@extends('layout.main')
@section('title', 'home')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">BOOK STORE</h1>
            <p class="lead fw-normal text-white-50 mb-0">Buy Your Book and Read Your Book</p>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($data_buku as $data )
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $data['name'] }}</h5>
                            <!-- Product price-->
                            Rp{{ $data['price'] }}
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form method="POST" action="/order">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $data->id }}">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id }}">
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-dark mt-auto">Add to Cart</button>
                            </div>
                        </form>
                        {{-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to Cart</a></div> --}}
                    </div>
                </div>
            </div> 
            @endforeach
        </div>
    </div>
</section>
@endsection