<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Splide css - Carousell --}}
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>@yield('title') | {{ config('app.name') }}</title>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid py-2">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand" href="#"><img src="{{ asset('images/kitsunime-nav.png') }}"
                        alt="kitsunime" width="150" height="auto"></a>
                <div class="d-flex justify-content-end gap-3">
                    <div class="search-bar">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                                aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                    <div class="btn-list">
                        <a href="" class="btn"><i class="fa-solid fa-list-ul"
                                style="font-size: 1.5rem;"></i></a>
                    </div>
                    <div class="btn-login">
                        <a class="btn btn-outline-primary" href="">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- footer --}}

    <footer class="text-light py-4 mt-5">
        <div class="container">
            <!-- Copyright -->
            <div class="text-center pt-3 border-top border-secondary mt-3">
                <small>&copy; 2025 Kitsunime. All rights reserved.</small>
            </div>
        </div>
    </footer>

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"
        integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous">
    </script>
    {{-- Splide js - Carousell --}}
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    @yield('scripts')
</body>

</html>
