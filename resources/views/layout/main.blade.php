<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BookStore || @yield('title') </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">BOOK STORE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        @if (Auth::check())
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        
                        @if (Auth::user()->role == 'admin')
                        <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Data Master</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/book">Books</a></li>
                                <li><a class="dropdown-item" href="/genre">Genre</a></li>
                                <li><a class="dropdown-item" href="/user">User</a></li>
                                <li><a class="dropdown-item" href="/massage">Message</a></li>
                                <li><a class="dropdown-item" href="/pesanan">Order</a></li>
                            </ul>
                        </li>
                        @endif
                        @if (Auth::user()->role == 'user')
                        <li class="nav-item"><a class="nav-link" href="/makeMassage/{{Auth::user()->id}}">Message</a></li>
                    </ul>
                    {{-- <form class="d-flex" method="GET" action="/cart"> --}}
                        <form class="form-inline" method="post" action="/search">
                            @csrf
                                <input type="text" class="form-control" name="search" id="search" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                        <a href="cart/{{Auth::user()->id}}" class="btn btn-outline-dark mx-3" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                        </a>
                    {{-- </form> --}}
                        @endif
                        <a href="/logout" class="btn btn-danger justify-content-md-end">Logout</a>
                        @endif
                </div>
            </div>
        </nav>

        @yield('content')

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Ahmad Fathan Syakir 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
