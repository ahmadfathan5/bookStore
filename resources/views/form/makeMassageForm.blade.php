@extends('layout.main')
@section('title', 'home')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Message</h1>
            <p class="lead fw-normal text-white-50 mb-0">Ask Any think</p>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <form action="/sendMassage" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">message from {{Auth::user()->name}}</label>
                <textarea class="form-control" rows="3" name="massage"></textarea>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-danger me-md-2" type="button">Cancel</button>
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
        </form>
    </div>
</section>
@endsection
