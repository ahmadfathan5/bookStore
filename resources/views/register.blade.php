@extends('layout.main')
@section('title', 'registrasi')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">REGISTER</h1>
            <p class="lead fw-normal text-white-50 mb-0">Not Member</p>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <form action="" method="post">
            @csrf
            <div class="form-outline mb-4">
                <input type="text" name="name" id="name" class="form-control" />
                <label class="form-label" for="name">Name</label>
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control" />
                <label class="form-label" for="email">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="password" class="form-control" />
                <label class="form-label" for="password">Password</label>
            </div>
            <div class="form-outline mb-4">
                <input type="number" name="phone" id="phone" class="form-control" />
                <label class="form-label" for="phone">Phone Number</label>
            </div>
            <div class="form-outline mb-4">
                <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                <label class="form-label" for="address">Address</label>
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Have Account? <a href="login">Log In</a></p>
            </div>
        </form>
    </div>
</section>
@endsection
