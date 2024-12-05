<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="bg-primary text-white d-flex align-items-center justify-content-between px-4" style="height: 70px;">
        <a href="{{ url('/') }}" class="text-white text-decoration-none fw-bold">Home</a>

        @auth
            <div class="position-relative profile">
                <button class="btn"><img src="https://picsum.photos/200" alt="pic" class="rounded-circle prof-btn" style="height: 40px;"></button>

                <div class="card py-2 px-3 position-absolute top-15 end-0 text-black prof d-none">
                    <div>{{ auth()->user()->username }}</div>
                    <a href="#" class="mt-2 fs-5 btn btn-outline-primary">Dashboard</a>
                    <form action="{{ url('/logout') }}" method="post" role="form">
                        @csrf
                        <button class="mt-2 fs-5 btn btn-outline-danger">Logout</button>
                    </form>
                </div>
            </div>
        @endauth

        @guest
            <div class="d-flex">
                <a href="{{ url('/login') }}" class="me-4 text-white text-decoration-none fw-bold">Login</a>
                <a href="{{ url('/register') }}" class="text-white text-decoration-none fw-bold">Register</a>
            </div> 
        @endguest
    </div>

    @yield('body')
</body>
<script>
    $(document)
        .click(function(e) {
            if (!$(e.target).closest('.prof').length && !$(e.target).is('.prof-btn')) {
                $('.prof').addClass('d-none');
            }
        })
        .on('click', '.prof-btn', function(e) {
            $('.prof').toggleClass('d-none');
        })
</script>
</html>