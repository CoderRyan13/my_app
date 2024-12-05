<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            width: 250px;
            background-color: #12171e;
            transition: all 0.5s ease;
            height: 100vh;
            color: #fff;
        }
        .sidebar ul li {
            position: relative;
            list-style-type: none;
            height: 36px;
            width: 90%;
            margin: 0.8rem auto;
            line-height: 50px;
        }
        .sidebar ul li a:hover, .sidebar ul li button:hover {
            border-radius: 0.8rem;
            background-color: #fff;
            color: #12171e !important;
        }
        .sidebar.menu-press {
            width: 80px;
        }
        .sidebar ul li .tooltips {
            color: #12171e;
            position: absolute;
            left: 125px;
            top: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0.5rem 0.8rem rgba(0, 0, 0, 0.2);
            border-radius: .6rem;
            padding: .4rem 1.2rem;
            line-height: 1.8rem;
            z-index: 20;
            opacity: 0;
        }
        .sidebar ul li:hover .tooltips {
            opacity: 1;
        }
         .main-content {
            flex: 1;
         }
    </style>
    @yield('styles')
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <div class="top d-flex align-items-center justify-content-between mt-1 ms-1">
                <div class="logo d-flex align-items-center tog">
                    <i class='bx bxl-codepen fs-2'></i>
                    <span class="fs-6 ms-1">CRM</span>
                </div>
                <div>
                    <button class="btn text-white menu-btn fs-5"><i class="bx bx-menu" id="btn" style="margin-left: 12px;"></i></button>
                </div>
            </div>
            <div class="d-flex align-items-center mt-3">
                <div class="me-3"><img src="ekko.jpg" alt="ekko" class="border rounded-circle" style="width: 50px; margin-left: 12px;"></div>
                <div class="tog">
                    <div class="fw-bold">{{ auth()->user()->username }}</div>
                    <div>Admin</div>
                </div>
            </div>
            <ul class="mt-2 d-flex flex-column" style="list-style-type: none;">
                <li>
                    <a class="text-decoration-none text-white menu-items px-3 py-2" href="#" style="margin-left: -15px;">
                        <i class="bx bxs-grid-alt"></i>
                        <span class="nav-item ms-2 tog">Dashboard</span>
                    </a>
                    <span class="tool-tip d-none">Dashboard</span>
                </li>
                <li>
                    <a class="text-decoration-none text-white menu-items px-3 py-2" href="#" style="margin-left: -15px;">
                        <i class="bx bxs-shopping-bag"></i>
                        <span class="nav-item ms-2 tog">Products</span>
                    </a>
                    <span class="tool-tip d-none">Products</span>
                </li>
                <li>
                    <a class="text-decoration-none text-white menu-items px-3 py-2" href="#" style="margin-left: -15px;">
                        <i class="bx bx-list-check"></i>
                        <span class="nav-item ms-2 tog">Categories</span>
                    </a>
                    <span class="tool-tip d-none">Categories</span>
                </li>
                <li>
                    <a class="text-decoration-none text-white menu-items px-3 py-2" href="#" style="margin-left: -15px;">
                        <i class="bx bxs-food-menu"></i>
                        <span class="nav-item ms-2 tog">Orders</span>
                    </a>
                    <span class="tool-tip d-none">Orders</span>
                </li>
                <li>
                    <a class="text-decoration-none text-white menu-items px-3 py-2" href="#" style="margin-left: -15px;">
                        <i class="bx bx-body"></i>
                        <span class="nav-item ms-2 tog">Customers</span>
                    </a>
                    <span class="tool-tip d-none">Customers</span>
                </li>
                <li>
                    <a class="text-decoration-none text-white menu-items px-3 py-2" href="#" style="margin-left: -15px;">
                        <i class="bx bx-location-plus"></i>
                        <span class="nav-item ms-2 tog">Shipping</span>
                    </a>
                    <span class="tool-tip d-none">Shipping</span>
                </li>
                <li>
                    <a class="text-decoration-none text-white menu-items px-3 py-2" href="#" style="margin-left: -15px;">
                        <i class="bx bx-cog"></i>
                        <span class="nav-item ms-2 tog">Settings</span>
                    </a>
                    <span class="tool-tip d-none">Settings</span>
                </li>
                <li>
                    <form action="{{ url('/logout') }}" method="post" role="form">
                        @csrf
                        <button class="btn text-white menu-items px-3 py-2" style="margin-left: -15px;">
                            <i class="bx bx-log-out"></i>
                            <span class="nav-item ms-2 tog">Logout</span>
                        </button>
                    </form>
                    <span class="tool-tip d-none">Logout</span>
                </li>
            </ul>
        </div>
        <div class="main-content m-4">
            @yield('content')
        </div>
    </div>
</body>
<script>
    $(document)
        .on('click', '#btn', function(e) {
            $('.sidebar').toggleClass('menu-press');

            if($('.sidebar').hasClass('menu-press')) {
                $('.tog').addClass('d-none');
                $('.tool-tip').removeClass('d-none');
                $('.tool-tip').addClass('tooltips');
            } else {
                $('.tool-tip').addClass('d-none');
                $('.tog').removeClass('d-none');
            }
        })
</script>
@yield('scripts')
</html>
