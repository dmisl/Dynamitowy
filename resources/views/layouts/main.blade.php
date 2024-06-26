<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    {{-- BOOTSTRAP --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- POPPINS FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .search {
            width: 100%;
            box-sizing: border-box;
            border: 0;
            outline: 0;
            font-size: 18px;
            background-color: white;
            background-image: url('{{ asset("storage/search.png") }}');
            background-position: 20px 10px;
            background-size: 30px;
            background-repeat: no-repeat;
            padding: 10px 20px 10px 57px;
        }
        .black_element
        {
            background-color: black;
            transition: 0.3s;
        }
        .black_element:hover
        {
            background-color: #333333;
            transition: 0.5s;
        }
        .blue_element
        {
            background-color: #4563FF;
            transition: 0.3s;
        }
        .blue_element:hover
        {
            background-color: rgb(39, 69, 235);
            transition: 0.5s;
        }
        .yellow_element
        {
            background-color: rgb(255, 207, 83);
            transition: 0.3s;
        }
        .yellow_element:hover
        {
            background-color: rgb(235, 187, 63);
            transition: 0.5s;
        }
        .green_element
        {
            background-color: rgb(135, 255, 178);
            transition: 0.3s;
        }
        .green_element:hover
        {
            background-color: rgb(115, 235, 158);
            transition: 0.5s;
        }
        table
        {
            width: 100%;
            font-size: 18px;
            border-collapse: collapse;
        }
        th, td
        {
            padding: 5px 10px;
            background-color: #59dbff5e;
            border: 1px solid rgba(0, 0, 0, 0.411);
        }
    </style>
</head>
<body class="d-flex flex-column custom-cursor" style="font-family: 'Poppins', sans-serif; height: 100vh; overflow: hidden;">
    <div style="position: fixed; z-index: -20; width: 100%; height: 100vh; background-image: url('{{ asset('storage/background.png') }}'); background-size: cover; background-repeat: no-repeat;"></div>
    <div style="position: fixed; width: 100%; height: 100vh; z-index: -19;">
        <div class="container h-100 w-100 px-5" style="opacity: 0.3;">
            <div style="height: 100%; width: 100%; background-color: white;"></div>
        </div>
    </div>

    <header class="bg-dark w-100 p-0 user-select-none" style="position: fixed; z-index: 99;">
        <div class="container text-light d-flex px-5">
            <a href="{{ route('home.index') }}" class="text-decoration-none text-light fs-2 fw-light m-0 p-0">Dynamitowy</a>
            @if(Auth::check())
                <div class="ms-auto" style="display: table;">
                    <div class="small" style="display: table-cell; vertical-align: middle;">{{ Auth::user()->name }} - {{ Auth::user()->email }} <a class="text-light" href="{{ route('login.logout') }}">(wyloguj)</a></div>
                </div>
            @endif
        </div>
    </header>
    <div id="app" class="m-0 p-0 flex-grow-1 overflow-auto">

        <div class="container min-vh-100">

            <div class="mx-5 min-vh-100">

                <div class="container text-center min-vh-100">
                    @yield('content')
                </div>

            </div>

        </div>

    </div>
</body>
</html>
{{-- ДОДАЄМ VUE --}}
@vite('resources/js/app.js')
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     const cursor = document.querySelector('.custom-cursor');

    //     document.addEventListener('mousemove', function(e) {
    //         cursor.style.left = e.pageX + 'px';
    //         cursor.style.top = e.pageY + 'px';
    //     });
    // });
</script>
