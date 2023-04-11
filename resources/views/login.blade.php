@extends('layout.main')
@section('title', 'home')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Login</h1>
            <p class="lead fw-normal text-white-50 mb-0">Wellcom</p>
            @if (session('status'))
            <p class="lead fw-normal text-white-50 mb-0">{{ session('status') }}</p>
            @endif
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <form action="" method="post">
            @csrf
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

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="register">Register</a></p>
            </div>
        </form>
    </div>
</section>
@endsection
