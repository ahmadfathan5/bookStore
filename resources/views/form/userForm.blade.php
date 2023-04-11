@extends('layout.main')
@section('title', 'home')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">USER FORM</h1>
            <p class="lead fw-normal text-white-50 mb-0">input user data</p>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <form>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>-- pilih role --</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-danger me-md-2" type="button">Cancel</button>
                <button class="btn btn-primary" type="button">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection