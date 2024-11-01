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
</head>
<body style="font-family: 'Poppins', sans-serif;">

    <div class="d-flex flex-column" style="height: 100vh;">

        <header class="w-100 bg-dark text-light m-0 p-0 user-select-none">
            <a class="text-decoration-none text-light" href="{{ route('home.index') }}"><p class="m-0 p-0">Dynamitowy</p></a>
            <div class="d-flex">
                <a href="{{ route('journal.index') }}" class="text-light text-decoration-none text-center mx-2" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" viewBox="0 0 256 256" xml:space="preserve">
                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                            <path d="M 45 16.132 c -1.104 0 -2 -0.896 -2 -2 V 8.535 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 5.597 C 47 15.237 46.104 16.132 45 16.132 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(77,60,49); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 83.772 59.752 V 14.158 c 0 -0.598 -0.485 -1.082 -1.082 -1.082 H 7.31 c -0.598 0 -1.082 0.485 -1.082 1.082 v 45.594 c 0 0.598 0.485 1.082 1.082 1.082 h 75.38 C 83.288 60.835 83.772 60.35 83.772 59.752 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(88,153,96); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 88 64.026 H 2 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 86 c 1.104 0 2 0.896 2 2 S 89.104 64.026 88 64.026 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(77,60,49); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 32.307 83.465 c -0.222 0 -0.447 -0.037 -0.667 -0.115 c -1.041 -0.369 -1.586 -1.512 -1.218 -2.553 l 6.881 -19.438 c 0.369 -1.042 1.512 -1.585 2.553 -1.219 c 1.041 0.369 1.586 1.512 1.218 2.553 l -6.881 19.438 C 33.902 82.952 33.13 83.465 32.307 83.465 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(77,60,49); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 57.692 83.465 c -0.823 0 -1.595 -0.513 -1.886 -1.334 l -6.88 -19.438 c -0.368 -1.041 0.177 -2.184 1.219 -2.553 c 1.039 -0.368 2.183 0.176 2.553 1.219 l 6.88 19.438 c 0.368 1.041 -0.177 2.184 -1.219 2.553 C 58.139 83.427 57.914 83.465 57.692 83.465 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(77,60,49); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 45 83.464 c -1.104 0 -2 -0.896 -2 -2 V 62.026 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 19.438 C 47 82.568 46.104 83.464 45 83.464 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(77,60,49); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                    </svg>
                    <p class="m-0 p-0">Lekcje</p>
                </a>
                <div class="text-center mx-2" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" viewBox="0 0 256 256" xml:space="preserve">

                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                            <path d="M 90 50.4 c 0 3.9 -3.161 7.061 -7.061 7.061 h -0.004 c -2.645 0 -5.06 1.482 -6.27 3.835 c -0.526 1.022 -1.102 2.021 -1.727 2.992 c -1.429 2.22 -1.5 5.05 -0.179 7.336 l 0.001 0.002 c 1.95 3.377 0.793 7.696 -2.584 9.645 l -9.353 5.4 c -3.377 1.95 -7.695 0.793 -9.645 -2.584 l -0.001 -0.002 c -1.32 -2.286 -3.806 -3.641 -6.443 -3.513 c -1.154 0.056 -2.307 0.055 -3.455 -0.001 c -2.642 -0.129 -5.133 1.221 -6.456 3.512 l -0.002 0.003 c -1.95 3.377 -6.268 4.534 -9.645 2.584 l -9.353 -5.4 c -3.377 -1.95 -4.534 -6.268 -2.584 -9.645 c 1.342 -2.325 1.209 -5.182 -0.24 -7.442 c -0.289 -0.451 -0.569 -0.91 -0.839 -1.378 c -0.27 -0.468 -0.528 -0.94 -0.774 -1.416 c -1.233 -2.384 -3.641 -3.929 -6.326 -3.929 l 0 0 C 3.161 57.46 0 54.299 0 50.4 V 39.6 c 0 -3.9 3.161 -7.061 7.061 -7.061 h 0.004 c 2.645 0 5.06 -1.482 6.27 -3.835 c 0.525 -1.022 1.102 -2.021 1.727 -2.992 c 1.429 -2.22 1.5 -5.05 0.179 -7.336 l -0.001 -0.002 c -1.95 -3.377 -0.793 -7.696 2.584 -9.645 l 9.353 -5.4 c 3.377 -1.95 7.695 -0.793 9.645 2.584 l 0.001 0.002 c 1.32 2.287 3.806 3.641 6.443 3.513 c 1.154 -0.056 2.307 -0.055 3.455 0 c 2.642 0.129 5.133 -1.221 6.456 -3.512 l 0.002 -0.003 c 1.95 -3.377 6.268 -4.534 9.645 -2.584 l 9.353 5.4 c 3.377 1.95 4.534 6.268 2.584 9.645 c -1.342 2.325 -1.209 5.182 0.24 7.443 c 0.289 0.451 0.568 0.91 0.839 1.378 c 0.27 0.468 0.528 0.94 0.774 1.416 c 1.233 2.384 3.641 3.929 6.326 3.929 c 3.9 0 7.061 3.161 7.061 7.061 V 50.4 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(96,95,109); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <circle cx="44.995999999999995" cy="44.995999999999995" r="26.496" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,201,80); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                            <path d="M 46.785 24.945 h -3.569 c -1.648 0 -2.945 1.409 -2.808 3.051 l 1.785 21.411 c 0.122 1.46 1.342 2.583 2.808 2.583 h 0 c 1.465 0 2.686 -1.123 2.808 -2.583 l 1.785 -21.411 C 49.729 26.354 48.433 24.945 46.785 24.945 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(221,71,71); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 45 65.055 L 45 65.055 c -1.556 0 -2.818 -1.262 -2.818 -2.818 v -2.704 c 0 -1.556 1.262 -2.818 2.818 -2.818 h 0 c 1.556 0 2.818 1.262 2.818 2.818 v 2.704 C 47.818 63.793 46.556 65.055 45 65.055 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(221,71,71); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                    </svg>
                    <p class="m-0 p-0">Uwagi</p>
                </div>
                @if(App\Models\User::find(Auth::id())->teacher)
                    @if(App\Models\User::find(Auth::id())->teacher->classroom)
                        <a class="text-center text-decoration-none mx-2 text-light" href="{{ route('classroom.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" viewBox="0 0 256 256" xml:space="preserve">

                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 30.704 40.648 l -0.039 1.631 c 0 0.588 -0.118 1.155 -0.334 1.679 l -10.169 4.031 c -3.317 0.559 -5.726 3.222 -5.726 6.328 v 22.284 h 23.323 H 61.08 V 54.318 c 0 -3.107 -2.41 -5.77 -5.726 -6.328 l -10.181 -4.031 l -0.36 -3.31 H 30.704 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(63,110,144); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <polyline points="20.16,47.99 30.33,43.96 37.65,56.18 20.16,47.99 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(240,114,129); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                    <polyline points="55.34,47.99 45.17,43.96 37.65,56.18 55.34,47.99 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(240,114,129); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                    <polygon points="45.17,43.96 37.65,56.18 30.33,43.96 30.33,40.65 45.17,40.65 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,190,155); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                    <path d="M 49.791 30.684 c -0.49 5.862 -4.351 10.9 -9.883 12.899 l 0 0 c -0.696 0.251 -1.425 0.376 -2.154 0.375 h 0.018 c -0.729 0.002 -1.458 -0.123 -2.154 -0.375 l 0 0 c -5.532 -1.999 -9.392 -7.038 -9.883 -12.899 l -0.467 -12.829 c 8.335 -1.746 16.671 -1.746 25.006 0 l -0.496 12.829" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,190,155); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 26.232 33.455 c -2.26 -0.657 -3.912 -2.744 -3.912 -5.216 V 25.72 c 0 -0.842 0.682 -1.524 1.524 -1.524 h 1.499 L 26.232 33.455 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,190,155); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 50.23 24.196 h 1.441 c 0.842 0 1.524 0.682 1.524 1.524 v 2.517 c 0 2.473 -1.652 4.56 -3.913 5.217 L 50.23 24.196 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,190,155); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 25.269 13.13 l 0 4.724 c 8.335 -1.746 16.671 -1.746 25.006 0 v -4.734 l 10.53 -3.46 c 0.709 -0.233 0.709 -1.237 0 -1.47 L 40.029 1.365 c -1.475 -0.485 -3.066 -0.485 -4.541 0 L 14.71 8.191 c -0.709 0.233 -0.709 1.237 0 1.47 L 25.269 13.13" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(63,110,144); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 16.313 29.209 h -4.269 v -6.689 c 0 -1.179 0.956 -2.134 2.134 -2.134 h 0 c 1.179 0 2.134 0.956 2.134 2.134 V 29.209 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,208,112); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <polygon points="8.9,76.19 30.31,76.19 27.14,83.74 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(204,206,213); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                    <rect x="27.14" y="83.74" rx="0" ry="0" width="45.14" height="5.25" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(238,240,245); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                                    <path d="M 27.136 88.999 l -14.834 -6.155 c -2.057 -0.853 -3.398 -2.861 -3.398 -5.088 v -1.569 l 18.232 7.557 V 88.999 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(238,240,245); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 78.868 60.077 H 40.703 c -2.196 0 -4.178 1.317 -5.028 3.342 l -8.538 20.326 h 45.138 l 8.645 -20.58 C 81.536 61.697 80.459 60.077 78.868 60.077 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(238,240,245); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 54.943 75.783 c -0.431 0 -0.828 -0.279 -0.958 -0.713 c -0.158 -0.529 0.143 -1.087 0.671 -1.245 c 1.19 -0.356 2.372 -1.355 2.874 -2.43 c 0.263 -0.562 0.307 -1.072 0.119 -1.368 c -0.193 -0.304 -0.637 -0.349 -0.884 -0.349 c -1.356 0 -3.051 1.174 -3.7 2.563 c -0.233 0.5 -0.826 0.716 -1.33 0.482 c -0.5 -0.234 -0.716 -0.829 -0.482 -1.33 c 0.975 -2.083 3.395 -3.716 5.513 -3.716 c 1.135 0 2.048 0.453 2.571 1.275 c 0.565 0.889 0.567 2.087 0.005 3.288 c -0.747 1.602 -2.361 2.976 -4.111 3.499 C 55.134 75.77 55.038 75.783 54.943 75.783 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 72.275 89.999 H 27.136 c -0.552 0 -1 -0.447 -1 -1 v -5.255 c 0 -0.553 0.448 -1 1 -1 h 45.138 c 0.553 0 1 0.447 1 1 v 5.255 C 73.275 89.551 72.827 89.999 72.275 89.999 z M 28.136 87.999 h 43.138 v -3.255 H 28.136 V 87.999 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 72.275 84.744 H 27.136 c -0.335 0 -0.647 -0.168 -0.833 -0.446 c -0.185 -0.279 -0.219 -0.632 -0.089 -0.941 l 8.538 -20.326 c 1.009 -2.402 3.345 -3.954 5.95 -3.954 h 38.165 c 1.083 0 2.087 0.538 2.686 1.44 s 0.707 2.036 0.287 3.034 l -8.645 20.58 C 73.04 84.503 72.677 84.744 72.275 84.744 z M 28.641 82.744 H 71.61 l 8.388 -19.968 c 0.162 -0.384 0.122 -0.804 -0.109 -1.151 c -0.23 -0.349 -0.603 -0.548 -1.02 -0.548 H 40.703 c -1.798 0 -3.41 1.071 -4.106 2.729 L 28.641 82.744 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 27.136 89.999 c -0.13 0 -0.26 -0.025 -0.383 -0.076 l -14.835 -6.154 c -2.438 -1.012 -4.014 -3.372 -4.014 -6.013 v -1.569 c 0 -0.334 0.167 -0.646 0.444 -0.831 c 0.277 -0.187 0.629 -0.22 0.938 -0.093 l 18.232 7.557 c 0.374 0.155 0.617 0.52 0.617 0.924 v 5.255 c 0 0.334 -0.167 0.646 -0.445 0.832 C 27.525 89.942 27.331 89.999 27.136 89.999 z M 9.904 77.684 v 0.072 c 0 1.829 1.091 3.464 2.781 4.165 l 13.451 5.581 v -3.09 L 9.904 77.684 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 27.136 84.744 c -0.127 0 -0.257 -0.024 -0.382 -0.076 L 8.522 77.11 c -0.441 -0.183 -0.691 -0.651 -0.598 -1.119 c 0.093 -0.468 0.504 -0.805 0.981 -0.805 h 21.407 c 0.335 0 0.647 0.168 0.833 0.446 c 0.185 0.279 0.219 0.632 0.089 0.941 l -3.175 7.557 C 27.897 84.513 27.526 84.744 27.136 84.744 z M 13.928 77.187 L 26.6 82.439 l 2.206 -5.253 H 13.928 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 37.656 44.722 c -0.842 0 -1.671 -0.146 -2.465 -0.432 c -5.85 -2.114 -9.966 -7.486 -10.485 -13.685 l -0.467 -12.806 c -0.018 -0.486 0.318 -0.915 0.794 -1.015 c 8.387 -1.756 16.892 -1.757 25.279 0 c 0.478 0.1 0.813 0.53 0.794 1.017 L 50.613 30.56 c -0.021 0.552 -0.479 1.007 -1.038 0.96 c -0.552 -0.021 -0.981 -0.486 -0.96 -1.038 l 0.46 -11.908 c -7.571 -1.477 -15.235 -1.476 -22.806 0 l 0.434 11.91 c 0.451 5.376 4.051 10.075 9.169 11.924 c 0.58 0.209 1.219 0.332 1.799 0.313 c 0.001 0 0.002 0 0.003 0 c 0.551 0 0.999 0.446 1 0.997 c 0.001 0.553 -0.445 1.001 -0.997 1.003 C 37.669 44.722 37.663 44.722 37.656 44.722 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 35.591 26.184 c -0.156 0 -0.314 -0.036 -0.461 -0.113 c -1.232 -0.643 -2.43 -0.644 -3.664 0 c -0.49 0.255 -1.094 0.065 -1.349 -0.424 c -0.255 -0.49 -0.065 -1.094 0.424 -1.349 c 1.83 -0.954 3.686 -0.954 5.514 0 c 0.49 0.255 0.68 0.859 0.424 1.349 C 36.3 25.988 35.951 26.184 35.591 26.184 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 44.313 26.184 c -0.156 0 -0.314 -0.036 -0.461 -0.113 c -1.234 -0.644 -2.432 -0.643 -3.664 0 c -0.489 0.255 -1.093 0.065 -1.349 -0.424 c -0.255 -0.49 -0.065 -1.094 0.424 -1.349 c 1.829 -0.954 3.684 -0.954 5.514 0 c 0.49 0.255 0.68 0.859 0.424 1.349 C 45.023 25.988 44.674 26.184 44.313 26.184 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 42.922 33.969 c -3.509 4.613 -7.019 4.645 -10.528 0 H 42.922 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 37.649 38.441 c -0.002 0 -0.005 0 -0.008 0 c -2.074 -0.003 -4.108 -1.305 -6.045 -3.869 c -0.229 -0.303 -0.267 -0.709 -0.097 -1.049 c 0.169 -0.339 0.516 -0.554 0.895 -0.554 h 10.528 c 0.38 0 0.727 0.215 0.896 0.556 c 0.169 0.341 0.13 0.748 -0.1 1.05 C 41.767 37.14 39.725 38.441 37.649 38.441 z M 34.609 34.969 c 1.042 0.976 2.059 1.47 3.036 1.472 c 0.002 0 0.003 0 0.005 0 c 0.979 0 2 -0.494 3.05 -1.472 H 34.609 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 26.196 34.277 c -0.092 0 -0.187 -0.013 -0.28 -0.04 c -2.715 -0.79 -4.611 -3.317 -4.611 -6.147 v -2.505 c 0 -1.387 1.129 -2.516 2.516 -2.516 h 1.491 c 0.552 0 1 0.448 1 1 c 0 0.552 -0.448 1 -1 1 h -1.491 c -0.285 0 -0.516 0.231 -0.516 0.516 v 2.505 c 0 1.946 1.303 3.684 3.17 4.226 c 0.53 0.154 0.835 0.709 0.681 1.24 C 27.029 33.993 26.63 34.277 26.196 34.277 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 49.12 34.277 c -0.434 0 -0.833 -0.284 -0.96 -0.721 c -0.154 -0.53 0.15 -1.085 0.681 -1.24 c 1.867 -0.543 3.171 -2.282 3.171 -4.228 v -2.503 c 0 -0.285 -0.231 -0.516 -0.517 -0.516 h -1.434 c -0.553 0 -1 -0.448 -1 -1 c 0 -0.552 0.447 -1 1 -1 h 1.434 c 1.388 0 2.517 1.129 2.517 2.516 v 2.503 c 0 2.83 -1.896 5.359 -4.612 6.149 C 49.307 34.264 49.212 34.277 49.12 34.277 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 23.965 71.183 c -0.533 0 -0.975 -0.416 -0.998 -0.952 c -0.014 -0.308 -0.01 -7.83 -0.007 -9.649 c 0.001 -0.552 0.448 -0.999 1 -0.999 c 0 0 0.001 0 0.001 0 c 0.552 0.001 0.999 0.449 0.999 1.001 c -0.003 2.599 -0.004 9.222 0.006 9.565 c 0.016 0.55 -0.414 1.013 -0.963 1.033 C 23.99 71.183 23.977 71.183 23.965 71.183 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 14.464 71.187 c -0.552 0 -1 -0.447 -1 -1 V 54.025 c 0 -3.547 2.694 -6.585 6.421 -7.262 l 9.594 -3.803 c 0.083 -0.296 0.125 -0.6 0.125 -0.909 l 0.04 -1.646 c 0.013 -0.552 0.475 -0.982 1.023 -0.976 c 0.552 0.013 0.989 0.472 0.976 1.023 l -0.039 1.622 c 0 0.682 -0.137 1.373 -0.408 2.028 c -0.104 0.25 -0.304 0.448 -0.556 0.548 l -10.113 4.009 c -0.065 0.025 -0.133 0.045 -0.203 0.057 c -2.816 0.475 -4.861 2.707 -4.861 5.307 v 16.162 C 15.464 70.739 15.016 71.187 14.464 71.187 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 60.853 55.05 c -0.553 0 -1 -0.421 -1 -0.974 c 0 -2.653 -2.045 -4.885 -4.861 -5.359 c -0.545 -0.092 -0.912 -0.607 -0.82 -1.152 c 0.091 -0.544 0.598 -0.908 1.152 -0.82 c 3.783 0.638 6.529 3.699 6.529 7.28 C 61.853 54.578 61.406 55.05 60.853 55.05 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 45.026 44.676 c -0.397 0 -0.773 -0.238 -0.929 -0.629 c -0.255 -0.638 -0.384 -1.309 -0.384 -1.994 l -0.037 -1.599 c -0.013 -0.552 0.424 -1.01 0.977 -1.022 c 0.548 -0.033 1.01 0.424 1.022 0.977 l 0.037 1.622 c 0 0.453 0.082 0.874 0.242 1.275 c 0.205 0.513 -0.045 1.095 -0.558 1.3 C 45.275 44.652 45.149 44.676 45.026 44.676 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 50.107 18.763 c -0.553 0 -1 -0.448 -1 -1 v -7.428 c 0 -0.552 0.447 -1 1 -1 s 1 0.448 1 1 v 7.428 C 51.107 18.315 50.66 18.763 50.107 18.763 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 25.238 18.763 c -0.552 0 -1 -0.448 -1 -1 v -7.428 c 0 -0.552 0.448 -1 1 -1 c 0.552 0 1 0.448 1 1 v 7.428 C 26.238 18.315 25.791 18.763 25.238 18.763 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 25.238 14.064 c -0.104 0 -0.208 -0.017 -0.312 -0.05 l -10.501 -3.451 c -0.728 -0.239 -1.217 -0.914 -1.217 -1.68 c 0 -0.767 0.489 -1.442 1.217 -1.682 l 20.663 -6.789 c 1.681 -0.552 3.459 -0.552 5.14 0 l 20.663 6.789 c 0.728 0.24 1.217 0.916 1.216 1.682 c 0 0.766 -0.489 1.441 -1.217 1.68 L 50.42 14.004 c -0.523 0.171 -1.09 -0.113 -1.263 -0.638 c -0.172 -0.524 0.113 -1.09 0.638 -1.262 L 59.6 8.882 l -19.995 -6.57 c -1.273 -0.419 -2.619 -0.419 -3.892 0 l -19.995 6.57 l 9.834 3.231 c 0.525 0.172 0.811 0.738 0.638 1.262 C 26.05 13.797 25.659 14.064 25.238 14.064 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 50.108 11.335 c -0.068 0 -0.137 -0.007 -0.206 -0.021 c -2.143 -0.449 -4.315 -0.784 -6.456 -0.996 c -0.549 -0.054 -0.951 -0.544 -0.896 -1.094 c 0.054 -0.549 0.538 -0.955 1.094 -0.896 c 2.212 0.219 4.455 0.564 6.669 1.028 c 0.54 0.113 0.887 0.644 0.773 1.184 C 50.987 11.011 50.571 11.335 50.108 11.335 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 25.237 11.335 c -0.463 0 -0.879 -0.324 -0.978 -0.795 c -0.113 -0.541 0.233 -1.071 0.774 -1.184 c 4.188 -0.877 8.436 -1.323 12.625 -1.324 c 0.552 0 1 0.447 1 1 c 0 0.552 -0.447 1 -1 1 c -4.052 0.001 -8.161 0.432 -12.215 1.281 C 25.374 11.328 25.305 11.335 25.237 11.335 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 14.208 21.28 c -0.552 0 -1 -0.448 -1 -1 V 8.883 c 0 -0.552 0.448 -1 1 -1 c 0.552 0 1 0.448 1 1 V 20.28 C 15.208 20.832 14.761 21.28 14.208 21.28 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 16.331 30.055 h -4.245 c -0.552 0 -1 -0.448 -1 -1 v -6.652 c 0 -1.722 1.401 -3.122 3.123 -3.122 c 1.722 0 3.122 1.401 3.122 3.122 v 6.652 C 17.331 29.607 16.883 30.055 16.331 30.055 z M 13.085 28.055 h 2.246 v -5.652 c 0 -0.619 -0.503 -1.123 -1.123 -1.123 c -0.619 0 -1.123 0.503 -1.123 1.123 V 28.055 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 39.798 44.35 c -0.409 0 -0.793 -0.253 -0.94 -0.661 c -0.187 -0.52 0.081 -1.093 0.601 -1.28 c 5.118 -1.85 8.718 -6.548 9.172 -11.971 c 0.045 -0.55 0.515 -0.958 1.079 -0.913 c 0.551 0.046 0.96 0.529 0.913 1.08 c -0.518 6.199 -4.633 11.571 -10.485 13.685 C 40.025 44.33 39.91 44.35 39.798 44.35 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 37.673 44.722 c -0.007 0 -0.013 0 -0.02 0 c -0.552 -0.001 -0.999 -0.45 -0.997 -1.003 c 0.001 -0.551 0.449 -0.997 1 -0.997 c 0.007 0 0.011 0 0.017 0 c 0.61 0 1.21 -0.105 1.785 -0.313 c 0.52 -0.187 1.093 0.081 1.28 0.601 c 0.187 0.52 -0.081 1.093 -0.601 1.28 C 39.344 44.576 38.514 44.722 37.673 44.722 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 37.652 57.183 c -0.147 0 -0.295 -0.032 -0.435 -0.1 l -17.494 -8.452 c -0.357 -0.173 -0.579 -0.54 -0.564 -0.936 c 0.015 -0.396 0.262 -0.747 0.631 -0.894 l 10.113 -4.009 c 0.458 -0.183 0.978 -0.003 1.229 0.42 l 7.381 12.461 c 0.225 0.38 0.174 0.861 -0.124 1.186 C 38.195 57.071 37.926 57.183 37.652 57.183 z M 22.644 47.821 l 12.459 6.019 l -5.256 -8.874 L 22.644 47.821 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 37.653 57.183 c -0.274 0 -0.543 -0.112 -0.737 -0.323 c -0.298 -0.325 -0.349 -0.807 -0.124 -1.186 l 7.381 -12.461 c 0.251 -0.422 0.772 -0.601 1.229 -0.42 l 10.113 4.009 c 0.369 0.146 0.617 0.497 0.631 0.894 c 0.015 0.396 -0.207 0.764 -0.564 0.936 l -17.494 8.452 C 37.948 57.151 37.8 57.183 37.653 57.183 z M 45.458 44.966 l -5.256 8.874 l 12.46 -6.018 L 45.458 44.966 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                                </svg>
                            <p class="m-0 p-0">Klasa</p>
                        </a>
                    @endif
                @endif

            </div>
        </header>
        <div id="app" class="flex-grow-1 overflow-auto">
            @yield('content')
        </div>

    </div>

</body>
</html>
{{-- ДОДАЄМ VUE --}}
@vite('resources/js/app.js')