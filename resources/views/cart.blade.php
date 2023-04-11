@extends('layout.main')
@section('title', 'home')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">CART</h1>
            <p class="lead fw-normal text-white-50 mb-0">is that all? you can buy more</p>
        </div>
    </div>
</header>

<!-- cart + summary -->
<section class="bg-light my-5">
    <div class="container">
        <div class="row">
        <!-- cart -->
            @foreach ($data as $item)
            <div class="col-lg-9">
                <div class="card border shadow-0">
                    <div class="m-4">
                        <h4 class="card-title mb-4">Your books cart</h4>
                        <div class="row gy-3 mb-4">
                            <div class="col-lg-5">
                                <div class="me-lg-5">
                                    <div class="d-flex">
                                        <img src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" class="border rounded me-3" style="width: 96px; height: 96px;" />
                                        <div class="">
                                            <a href="#" class="nav-link">{{ $item->name }}</a>
                                            <p class="text-muted">release : {{ $item->year }}</p>
                                            <p class="text-muted">Author : {{$item->author}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                                <div class="">
                                    <text class="h6">Rp{{ $item->price * $item->quantity}}</text> <br />
                                    <text class="h6">Qty : {{ $item->quantity }}</text> <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        <!-- cart -->
        <!-- summary -->
            <div class="col-lg-3">
                <div class="card shadow-0 border">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Total price:</p>
                            <p class="mb-2">RP{{ $item->price * $item->quantity}}</p>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Total price:</p>
                            <p class="mb-2 fw-bold">RP{{ $item->price * $item->quantity}}</p>
                        </div>

                        <div class="mt-3">
                            {{-- <form action="/payment" method="post">
                                @csrf
                                <label class="form-label w-100 shadow-0 mb-2">Metode Pembayaran</label>
                                <input type="hidden" name="order_id" value="{{ $item->order_id }}">
                                <button type="submit" class="btn btn-success w-100 shadow-0 mb-2">Bayar</button>
                            </form> --}}
                            <a href="/payment" class="btn btn-success w-100 shadow-0 mb-2"> bayar </a>
                            <a href="/" class="btn btn-light w-100 border mt-2"> Back to shop </a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- summary -->
        </div>
    </div>
</section>
<!-- cart + summary -->

@endsection
