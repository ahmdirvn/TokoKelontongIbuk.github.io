<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="{{ secure_asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Online Store')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success py-4">
        <!-- Change bg-secondary to bg-primary -->
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">Toko Kelontong
                IBUK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{ route('home.index') }}">Beranda</a>
                    <a class="nav-link active" href="{{ route('product.index') }}">Produk</a>
                    <a class="nav-link active" href="{{ route('home.about') }}">Tentang</a>
                    <a class="nav-link active" href="{{ route('cart.index') }}">Keranjang</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div> @guest
                        <a class="nav-link active" href="{{ route('login') }}">Masuk</a>
                        <a class="nav-link active" href="{{ route('register') }}">Daftar</a>
                    @else
                        <a class="nav-link active" href="{{ route('myaccount.orders') }}">Orderanku</a>
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" class="nav-link active"
                                onclick="document.getElementById('logout').submit();">Keluar</a>
                            @csrf
                    </form> @endguest

                </div>
            </div>
        </div>
    </nav>

    <header class=" text-white text-center py-4" style="background-color:rgb(121, 242, 145);">
        <!-- Change bg-info to bg-success -->
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle', 'TOKO KELONTONG ONLINE')</h2>
        </div>
    </header>
    <!-- header -->

    <div class="container my-4">
        @yield('content')
    </div>
    <!-- footer -->
    <div class="bg-success py-4 text-center text-white">
        <!-- Change copyright class to bg-dark -->
        <div class="container">
            <small>
                &copy; <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">
                    Ahmad Irvan Maulana
                </a> - <b>Politeknik Negeri Semarang</b>
            </small>
        </div>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap crossorigin=" anonymous"></script>


</body>



</html>
