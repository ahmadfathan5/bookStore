@extends('layout.main')
@section('title', 'home')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Dashboard</h1>
            <p class="lead fw-normal text-white-50 mb-0">Hallo admin</p>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Data Buku</h5>
                            <h5><span class="badge text-bg-warning">{{ $bookCount }}</span></h5>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-warning mt-auto text-black" href="book">More Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Data Genre</h5>
                            <h5><span class="badge text-bg-warning">{{ $genreCount }}</span></h5>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-warning mt-auto text-black" href="genre">More Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Data User</h5>
                            <h5><span class="badge text-bg-warning">{{ $userCount }}</span></h5>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-warning mt-auto text-black" href="user">More Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Data Order</h5>
                            <h5><span class="badge text-bg-warning">{{ $orderCount }}</span></h5>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-warning mt-auto text-black" href="pesanan">More Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Mesage</h5>
                            <h5><span class="badge text-bg-warning">{{ $pesanCount }}</span></h5>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-warning mt-auto text-black" href="massage">More Detail</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection