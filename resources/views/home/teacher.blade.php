@extends('layouts.main')

@section('title', 'Główna strona | Dynamitowy')

@section('content')

    <div class="row mt-5">

        <div class="col-md-4 col-12">
            <a href="{{ route('chat.index') }}" class="text-decoration-none text-light mt-2">
                <div class="bg-dark d-flex mx-auto justify-content-center" style="width: 90%;">
                    <div class="p-2 ps-0">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                <path d="M 45 51.648 l 45 -27.845 v -6.422 c 0 -1.595 -1.293 -2.887 -2.887 -2.887 H 2.887 C 1.293 14.494 0 15.786 0 17.381 v 6.422 L 45 51.648 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 45.789 54.688 c -0.011 0.007 -0.023 0.008 -0.033 0.015 c -0.08 0.047 -0.166 0.08 -0.253 0.111 c -0.04 0.014 -0.077 0.035 -0.118 0.046 c -0.115 0.031 -0.233 0.045 -0.353 0.048 c -0.011 0 -0.021 0.004 -0.031 0.004 c 0 0 -0.001 0 -0.001 0 s -0.001 0 -0.001 0 c -0.011 0 -0.021 -0.004 -0.031 -0.004 c -0.119 -0.003 -0.238 -0.018 -0.353 -0.048 c -0.04 -0.011 -0.078 -0.032 -0.118 -0.046 c -0.087 -0.031 -0.172 -0.064 -0.253 -0.111 c -0.011 -0.006 -0.023 -0.008 -0.033 -0.015 L 0 27.331 v 45.289 c 0 1.594 1.293 2.887 2.887 2.887 h 84.226 c 1.594 0 2.887 -1.293 2.887 -2.887 V 27.331 L 45.789 54.688 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="d-table">
                        <h2 class="d-table-cell align-middle m-0 p-0 fw-light">Wiadomosci ></h2>
                    </div>
                </div>
            </a>
            <div class="text-decoration-none text-dark">
                <div class="bg-warning mx-auto mt-4" style="width: 90%;">
                    @if(Auth::user()->teacher->classroom)
                        <a href="{{ route('journal.index', [2]) }}" class="text-decoration-none text-dark">
                            <div class="d-flex justify-content-center">
                                <div class="p-2 ps-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" viewBox="0 0 256 256" xml:space="preserve">

                                        <defs>
                                        </defs>
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                            <path d="M 83.974 73.678 H 6.026 C 3.25 73.678 1 71.428 1 68.652 v -0.909 h 88 v 0.909 C 89 71.428 86.75 73.678 83.974 73.678 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(238,240,245); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 79.004 16.322 c 2.936 0 5.317 2.381 5.317 5.317 v 46.104 H 5.679 V 21.639 c 0 -2.936 2.381 -5.317 5.317 -5.317 H 79.004 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(238,240,245); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 78.888 61.743 V 23.965 c 0 -1.019 -0.826 -1.846 -1.846 -1.846 H 52.068 H 37.932 H 12.958 c -1.02 0 -1.846 0.826 -1.846 1.846 v 37.778 v 6 h 67.776 V 61.743 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(179,218,254); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 27.196 55.116 l -2.372 -1.583 h -0.012 c 0.722 -0.375 1.221 -1.122 1.221 -1.992 v -2.027 c 0 -1.245 -1.009 -2.254 -2.254 -2.254 h -0.331 c -1.245 0 -2.254 1.009 -2.254 2.254 v 2.027 c 0 0.87 0.499 1.617 1.221 1.992 h -0.017 l -2.369 1.583 c -0.604 0.404 -0.967 1.083 -0.967 1.81 v 3.112 h 4.551 h 4.551 v -3.111 C 28.164 56.2 27.801 55.52 27.196 55.116 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,208,112); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 41.196 55.116 l -2.372 -1.583 h -0.012 c 0.722 -0.375 1.221 -1.122 1.221 -1.992 v -2.027 c 0 -1.245 -1.009 -2.254 -2.254 -2.254 h -0.331 c -1.245 0 -2.254 1.009 -2.254 2.254 v 2.027 c 0 0.87 0.499 1.617 1.221 1.992 h -0.017 l -2.369 1.583 c -0.604 0.404 -0.967 1.083 -0.967 1.81 v 3.112 h 4.551 h 4.551 v -3.111 C 42.164 56.2 41.801 55.52 41.196 55.116 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,208,112); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 55.196 55.116 l -2.372 -1.583 h -0.012 c 0.722 -0.375 1.221 -1.122 1.221 -1.992 v -2.027 c 0 -1.245 -1.009 -2.254 -2.254 -2.254 h -0.331 c -1.245 0 -2.254 1.009 -2.254 2.254 v 2.027 c 0 0.87 0.499 1.617 1.221 1.992 h -0.017 l -2.369 1.583 c -0.604 0.404 -0.967 1.083 -0.967 1.81 v 3.112 h 4.551 h 4.551 v -3.111 C 56.164 56.2 55.801 55.52 55.196 55.116 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,208,112); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 27.196 37.116 l -2.372 -1.583 h -0.012 c 0.722 -0.375 1.221 -1.122 1.221 -1.992 v -2.027 c 0 -1.245 -1.009 -2.254 -2.254 -2.254 h -0.331 c -1.245 0 -2.254 1.009 -2.254 2.254 v 2.027 c 0 0.87 0.499 1.617 1.221 1.992 h -0.017 l -2.369 1.583 c -0.604 0.404 -0.967 1.083 -0.967 1.81 v 3.112 h 4.551 h 4.551 v -3.111 C 28.164 38.2 27.801 37.52 27.196 37.116 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,208,112); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 41.196 37.116 l -2.372 -1.583 h -0.012 c 0.722 -0.375 1.221 -1.122 1.221 -1.992 v -2.027 c 0 -1.245 -1.009 -2.254 -2.254 -2.254 h -0.331 c -1.245 0 -2.254 1.009 -2.254 2.254 v 2.027 c 0 0.87 0.499 1.617 1.221 1.992 h -0.017 l -2.369 1.583 c -0.604 0.404 -0.967 1.083 -0.967 1.81 v 3.112 h 4.551 h 4.551 v -3.111 C 42.164 38.2 41.801 37.52 41.196 37.116 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,208,112); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 55.196 37.116 l -2.372 -1.583 h -0.012 c 0.722 -0.375 1.221 -1.122 1.221 -1.992 v -2.027 c 0 -1.245 -1.009 -2.254 -2.254 -2.254 h -0.331 c -1.245 0 -2.254 1.009 -2.254 2.254 v 2.027 c 0 0.87 0.499 1.617 1.221 1.992 h -0.017 l -2.369 1.583 c -0.604 0.404 -0.967 1.083 -0.967 1.81 v 3.112 h 4.551 h 4.551 v -3.111 C 56.164 38.2 55.801 37.52 55.196 37.116 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,208,112); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 69.196 37.116 l -2.372 -1.583 h -0.012 c 0.722 -0.375 1.221 -1.122 1.221 -1.992 v -2.027 c 0 -1.245 -1.009 -2.254 -2.254 -2.254 h -0.331 c -1.245 0 -2.254 1.009 -2.254 2.254 v 2.027 c 0 0.87 0.499 1.617 1.221 1.992 h -0.017 l -2.369 1.583 c -0.604 0.404 -0.967 1.083 -0.967 1.81 v 3.112 h 4.551 h 4.551 v -3.111 C 70.164 38.2 69.801 37.52 69.196 37.116 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,208,112); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 27.751 54.284 l -1.315 -0.877 c 0.373 -0.529 0.596 -1.171 0.596 -1.866 v -2.028 c 0 -1.794 -1.459 -3.254 -3.254 -3.254 h -0.331 c -1.794 0 -3.254 1.46 -3.254 3.254 v 2.028 c 0 0.695 0.223 1.336 0.595 1.865 l -1.316 0.879 c -0.883 0.591 -1.411 1.578 -1.411 2.642 v 3.111 c 0 0.553 0.448 1 1 1 h 9.103 c 0.552 0 1 -0.447 1 -1 v -3.111 C 29.164 55.863 28.636 54.876 27.751 54.284 z M 22.193 49.513 c 0 -0.691 0.563 -1.254 1.254 -1.254 h 0.331 c 0.691 0 1.254 0.563 1.254 1.254 v 2.028 c 0 0.69 -0.563 1.253 -1.254 1.253 h -0.331 c -0.691 0 -1.254 -0.563 -1.254 -1.253 V 49.513 z M 27.164 59.038 h -7.103 v -2.111 c 0 -0.395 0.196 -0.76 0.523 -0.979 l 1.947 -1.301 c 0.293 0.087 0.596 0.147 0.916 0.147 h 0.331 c 0.319 0 0.621 -0.06 0.913 -0.146 l 1.949 1.3 c 0.328 0.22 0.524 0.586 0.524 0.979 V 59.038 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(7,42,56); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 41.751 54.284 l -1.315 -0.877 c 0.373 -0.529 0.596 -1.171 0.596 -1.866 v -2.028 c 0 -1.794 -1.459 -3.254 -3.254 -3.254 h -0.331 c -1.794 0 -3.254 1.46 -3.254 3.254 v 2.028 c 0 0.695 0.223 1.336 0.595 1.865 l -1.316 0.879 c -0.883 0.591 -1.411 1.578 -1.411 2.642 v 3.111 c 0 0.553 0.448 1 1 1 h 9.103 c 0.552 0 1 -0.447 1 -1 v -3.111 C 43.164 55.863 42.636 54.876 41.751 54.284 z M 36.193 49.513 c 0 -0.691 0.563 -1.254 1.254 -1.254 h 0.331 c 0.691 0 1.254 0.563 1.254 1.254 v 2.028 c 0 0.69 -0.563 1.253 -1.254 1.253 h -0.331 c -0.691 0 -1.254 -0.563 -1.254 -1.253 V 49.513 z M 41.164 59.038 h -7.103 v -2.111 c 0 -0.395 0.196 -0.76 0.523 -0.979 l 1.947 -1.301 c 0.293 0.087 0.596 0.147 0.916 0.147 h 0.331 c 0.319 0 0.621 -0.06 0.913 -0.146 l 1.949 1.3 c 0.328 0.22 0.524 0.586 0.524 0.979 V 59.038 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(7,42,56); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 55.75 54.284 l -1.314 -0.877 c 0.373 -0.529 0.596 -1.171 0.596 -1.866 v -2.028 c 0 -1.794 -1.46 -3.254 -3.254 -3.254 h -0.331 c -1.794 0 -3.254 1.46 -3.254 3.254 v 2.028 c 0 0.695 0.223 1.336 0.595 1.865 l -1.317 0.88 c -0.883 0.592 -1.41 1.579 -1.41 2.642 v 3.111 c 0 0.553 0.447 1 1 1 h 9.103 c 0.553 0 1 -0.447 1 -1 v -3.111 C 57.164 55.863 56.636 54.876 55.75 54.284 z M 50.193 49.513 c 0 -0.691 0.563 -1.254 1.254 -1.254 h 0.331 c 0.691 0 1.254 0.563 1.254 1.254 v 2.028 c 0 0.69 -0.563 1.253 -1.254 1.253 h -0.331 c -0.691 0 -1.254 -0.563 -1.254 -1.253 V 49.513 z M 55.164 59.038 h -7.103 v -2.111 c 0 -0.394 0.195 -0.76 0.522 -0.979 l 1.947 -1.301 c 0.293 0.087 0.596 0.148 0.916 0.148 h 0.331 c 0.319 0 0.621 -0.06 0.913 -0.146 l 1.948 1.301 c 0.328 0.219 0.524 0.585 0.524 0.979 V 59.038 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(7,42,56); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 27.751 36.285 l -1.315 -0.878 c 0.373 -0.529 0.597 -1.171 0.597 -1.867 v -2.027 c 0 -1.794 -1.459 -3.254 -3.254 -3.254 h -0.331 c -1.794 0 -3.254 1.459 -3.254 3.254 v 2.027 c 0 0.695 0.223 1.336 0.595 1.865 l -1.316 0.879 c -0.883 0.591 -1.411 1.578 -1.411 2.641 v 3.112 c 0 0.552 0.448 1 1 1 h 9.103 c 0.552 0 1 -0.448 1 -1 v -3.111 C 29.164 37.863 28.636 36.875 27.751 36.285 z M 22.193 31.513 c 0 -0.691 0.563 -1.254 1.254 -1.254 h 0.331 c 0.691 0 1.254 0.563 1.254 1.254 v 2.027 c 0 0.691 -0.563 1.254 -1.254 1.254 h -0.331 c -0.691 0 -1.254 -0.563 -1.254 -1.254 V 31.513 z M 27.164 41.039 h -7.103 v -2.112 c 0 -0.394 0.196 -0.76 0.523 -0.979 l 1.947 -1.301 c 0.292 0.087 0.596 0.147 0.916 0.147 h 0.331 c 0.319 0 0.622 -0.061 0.914 -0.147 l 1.949 1.301 c 0.328 0.219 0.523 0.585 0.523 0.979 V 41.039 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(7,42,56); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 41.751 36.285 l -1.315 -0.878 c 0.373 -0.529 0.597 -1.171 0.597 -1.867 v -2.027 c 0 -1.794 -1.459 -3.254 -3.254 -3.254 h -0.331 c -1.794 0 -3.254 1.459 -3.254 3.254 v 2.027 c 0 0.695 0.223 1.336 0.595 1.865 l -1.316 0.879 c -0.883 0.591 -1.411 1.578 -1.411 2.641 v 3.112 c 0 0.552 0.448 1 1 1 h 9.103 c 0.552 0 1 -0.448 1 -1 v -3.111 C 43.164 37.863 42.636 36.875 41.751 36.285 z M 36.193 31.513 c 0 -0.691 0.563 -1.254 1.254 -1.254 h 0.331 c 0.691 0 1.254 0.563 1.254 1.254 v 2.027 c 0 0.691 -0.563 1.254 -1.254 1.254 h -0.331 c -0.691 0 -1.254 -0.563 -1.254 -1.254 V 31.513 z M 41.164 41.039 h -7.103 v -2.112 c 0 -0.394 0.196 -0.76 0.523 -0.979 l 1.947 -1.301 c 0.292 0.087 0.596 0.147 0.916 0.147 h 0.331 c 0.319 0 0.622 -0.061 0.914 -0.147 l 1.949 1.301 c 0.328 0.219 0.523 0.585 0.523 0.979 V 41.039 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(7,42,56); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 55.751 36.285 l -1.315 -0.878 c 0.373 -0.529 0.597 -1.171 0.597 -1.867 v -2.027 c 0 -1.794 -1.46 -3.254 -3.254 -3.254 h -0.331 c -1.794 0 -3.254 1.459 -3.254 3.254 v 2.027 c 0 0.695 0.223 1.336 0.595 1.865 l -1.317 0.88 c -0.883 0.591 -1.41 1.579 -1.41 2.641 v 3.112 c 0 0.552 0.447 1 1 1 h 9.103 c 0.553 0 1 -0.448 1 -1 v -3.111 C 57.164 37.863 56.636 36.875 55.751 36.285 z M 50.193 31.513 c 0 -0.691 0.563 -1.254 1.254 -1.254 h 0.331 c 0.691 0 1.254 0.563 1.254 1.254 v 2.027 c 0 0.691 -0.563 1.254 -1.254 1.254 h -0.331 c -0.691 0 -1.254 -0.563 -1.254 -1.254 V 31.513 z M 55.164 41.039 h -7.103 v -2.112 c 0 -0.394 0.195 -0.76 0.522 -0.979 l 1.947 -1.301 c 0.293 0.087 0.596 0.148 0.916 0.148 h 0.331 c 0.319 0 0.622 -0.061 0.913 -0.147 l 1.949 1.301 c 0.328 0.219 0.523 0.584 0.523 0.979 V 41.039 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(7,42,56); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 69.751 36.285 l -1.315 -0.878 c 0.373 -0.529 0.597 -1.171 0.597 -1.867 v -2.027 c 0 -1.794 -1.46 -3.254 -3.254 -3.254 h -0.331 c -1.794 0 -3.254 1.459 -3.254 3.254 v 2.027 c 0 0.695 0.223 1.336 0.595 1.865 l -1.317 0.88 c -0.883 0.591 -1.41 1.579 -1.41 2.641 v 3.112 c 0 0.552 0.447 1 1 1 h 9.103 c 0.553 0 1 -0.448 1 -1 v -3.111 C 71.164 37.863 70.636 36.875 69.751 36.285 z M 64.193 31.513 c 0 -0.691 0.563 -1.254 1.254 -1.254 h 0.331 c 0.691 0 1.254 0.563 1.254 1.254 v 2.027 c 0 0.691 -0.563 1.254 -1.254 1.254 h -0.331 c -0.691 0 -1.254 -0.563 -1.254 -1.254 V 31.513 z M 69.164 41.039 h -7.103 v -2.112 c 0 -0.394 0.195 -0.76 0.522 -0.979 l 1.947 -1.301 c 0.293 0.087 0.596 0.148 0.916 0.148 h 0.331 c 0.319 0 0.622 -0.061 0.913 -0.147 l 1.949 1.301 c 0.328 0.219 0.523 0.584 0.523 0.979 V 41.039 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(7,42,56); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <rect x="40.16" y="67.74" rx="0" ry="0" width="9.67" height="5.93" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(215,216,219); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
                                            <path d="M 89 66.743 h -3.679 V 21.639 c 0 -3.483 -2.834 -6.317 -6.317 -6.317 H 10.996 c -3.483 0 -6.317 2.834 -6.317 6.317 v 45.104 H 1 c -0.552 0 -1 0.447 -1 1 v 0.909 c 0 3.322 2.703 6.025 6.026 6.025 h 33.138 h 11.672 h 33.138 c 3.323 0 6.026 -2.703 6.026 -6.025 v -0.909 C 90 67.19 89.553 66.743 89 66.743 z M 6.679 21.639 c 0 -2.38 1.937 -4.317 4.317 -4.317 h 68.008 c 2.381 0 4.317 1.937 4.317 4.317 v 45.104 H 50.836 H 39.164 H 6.679 V 21.639 z M 6.026 72.678 c -2.189 0 -3.977 -1.757 -4.025 -3.935 h 2.678 h 34.485 v 3.935 H 6.026 z M 41.164 72.678 v -3.935 h 7.672 v 3.935 H 41.164 z M 83.974 72.678 H 50.836 v -3.935 h 34.485 h 2.678 C 87.95 70.921 86.163 72.678 83.974 72.678 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(7,42,56); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 65.613 59.589 c -0.553 0 -1 -0.447 -1 -1 V 51.46 c 0 -0.553 0.447 -1 1 -1 s 1 0.447 1 1 v 7.129 C 66.613 59.142 66.166 59.589 65.613 59.589 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(7,42,56); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 69.178 56.024 h -7.13 c -0.553 0 -1 -0.447 -1 -1 s 0.447 -1 1 -1 h 7.13 c 0.553 0 1 0.447 1 1 S 69.73 56.024 69.178 56.024 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(7,42,56); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 78.888 62.743 c -0.553 0 -1 -0.447 -1 -1 V 23.965 c 0 -0.466 -0.379 -0.846 -0.846 -0.846 H 52.068 c -0.553 0 -1 -0.448 -1 -1 s 0.447 -1 1 -1 h 24.974 c 1.569 0 2.846 1.276 2.846 2.846 v 37.778 C 79.888 62.296 79.44 62.743 78.888 62.743 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(7,42,56); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 11.112 62.743 c -0.552 0 -1 -0.447 -1 -1 V 23.965 c 0 -1.569 1.277 -2.846 2.846 -2.846 h 24.974 c 0.552 0 1 0.448 1 1 s -0.448 1 -1 1 H 12.958 c -0.467 0 -0.846 0.379 -0.846 0.846 v 37.778 C 12.112 62.296 11.664 62.743 11.112 62.743 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(7,42,56); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 45.969 23.119 h -1.938 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 1.938 c 0.552 0 1 0.448 1 1 S 46.521 23.119 45.969 23.119 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(7,42,56); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="d-table text-decoration-none text-dark">
                                    <h2 class="d-table-cell align-middle m-0 p-0 fw-light">Klasy ></h2>
                                </div>
                            </div>

                        </a>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="{{ route('journal.index') }}" class="text-decoration-none text-light mt-2">
                <div class="bg-primary d-flex mx-auto justify-content-center" style="width: 90%;">
                    <div class="p-2 ps-0">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                <polyline points="83.75,25.48 89,25.48 89,84.52 1,84.52 1,25.48 6.25,25.48 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(182,28,28); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                <path d="M 6.249 80.001 c 12.917 -3.135 25.834 -3.135 38.751 0 V 23.185 c -12.917 -3.135 -25.834 -3.135 -38.751 0 V 80.001 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(234,158,101); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 72.234 21.221 c 3.839 0.378 7.677 1.033 11.516 1.964 v 56.816 c -12.917 -3.135 -25.834 -3.135 -38.751 0 V 23.185" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(201,130,77); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 45 80.001 c 5.916 -10.317 15.092 -16.082 27.234 -17.705 V 5.48 C 60.092 7.103 50.916 12.869 45 23.185 V 80.001 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(234,158,101); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 6.25 81.001 c -0.222 0 -0.44 -0.074 -0.618 -0.214 C 5.39 80.598 5.25 80.308 5.25 80.001 V 23.186 c 0 -0.461 0.316 -0.863 0.764 -0.972 c 13.013 -3.159 26.209 -3.159 39.222 0 C 45.684 22.323 46 22.724 46 23.186 v 56.815 c 0 0.307 -0.141 0.597 -0.382 0.786 c -0.242 0.188 -0.557 0.259 -0.854 0.186 c -12.7 -3.082 -25.579 -3.082 -38.279 0 C 6.407 80.991 6.328 81.001 6.25 81.001 z M 25.625 76.66 c 6.138 0 12.275 0.693 18.375 2.079 V 23.976 c -12.197 -2.841 -24.553 -2.84 -36.75 0 v 54.764 C 13.35 77.354 19.487 76.66 25.625 76.66 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 83.751 81.001 c -0.079 0 -0.158 -0.009 -0.235 -0.028 c -12.703 -3.083 -25.581 -3.082 -38.28 0 c -0.3 0.07 -0.613 0.003 -0.854 -0.186 C 44.141 80.598 44 80.308 44 80.001 V 23.186 c 0 -0.552 0.448 -1 1 -1 s 1 0.448 1 1 v 55.554 c 12.201 -2.772 24.55 -2.771 36.751 0 V 23.976 c -3.529 -0.822 -7.097 -1.414 -10.614 -1.76 c -0.55 -0.054 -0.951 -0.543 -0.897 -1.093 c 0.054 -0.549 0.533 -0.952 1.093 -0.897 c 3.865 0.38 7.786 1.049 11.655 1.988 c 0.448 0.109 0.764 0.51 0.764 0.972 v 56.815 c 0 0.307 -0.141 0.597 -0.382 0.786 C 84.191 80.927 83.973 81.001 83.751 81.001 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 89 85.521 H 1 c -0.552 0 -1 -0.447 -1 -1 V 25.48 c 0 -0.552 0.448 -1 1 -1 h 5.25 c 0.552 0 1 0.448 1 1 s -0.448 1 -1 1 H 2 v 57.041 h 86 V 26.48 h -4.249 c -0.553 0 -1 -0.448 -1 -1 s 0.447 -1 1 -1 H 89 c 0.553 0 1 0.448 1 1 v 59.041 C 90 85.073 89.553 85.521 89 85.521 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 45 81.001 c -0.085 0 -0.172 -0.011 -0.257 -0.034 C 44.305 80.851 44 80.454 44 80.001 V 23.186 c 0 -0.174 0.046 -0.346 0.132 -0.498 c 5.959 -10.392 15.37 -16.515 27.969 -18.199 c 0.292 -0.039 0.575 0.049 0.791 0.239 c 0.218 0.19 0.342 0.464 0.342 0.752 v 56.816 c 0 0.501 -0.371 0.925 -0.867 0.991 c -11.951 1.598 -20.866 7.388 -26.5 17.211 C 45.686 80.814 45.352 81.001 45 81.001 z M 46 23.454 v 53.094 c 5.829 -8.383 14.3 -13.461 25.234 -15.119 V 6.637 C 59.944 8.427 51.459 14.081 46 23.454 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 51.938 28.046 c -0.271 0 -0.541 -0.109 -0.738 -0.326 c -0.372 -0.408 -0.344 -1.04 0.063 -1.413 c 3.915 -3.577 8.651 -6.194 14.078 -7.781 c 0.53 -0.156 1.085 0.15 1.24 0.679 c 0.155 0.53 -0.149 1.085 -0.68 1.241 c -5.131 1.5 -9.603 3.968 -13.289 7.337 C 52.42 27.959 52.179 28.046 51.938 28.046 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 51.939 38.565 c -0.271 0 -0.541 -0.109 -0.738 -0.326 c -0.372 -0.408 -0.344 -1.04 0.063 -1.413 c 3.914 -3.575 8.65 -6.192 14.076 -7.779 c 0.53 -0.156 1.085 0.15 1.24 0.679 c 0.155 0.53 -0.149 1.085 -0.68 1.241 c -5.13 1.5 -9.601 3.968 -13.287 7.335 C 52.422 38.479 52.181 38.565 51.939 38.565 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 51.939 49.087 c -0.271 0 -0.541 -0.109 -0.738 -0.325 c -0.372 -0.408 -0.344 -1.041 0.063 -1.413 c 3.915 -3.576 8.651 -6.193 14.076 -7.779 c 0.53 -0.156 1.085 0.15 1.24 0.679 c 0.155 0.53 -0.149 1.085 -0.68 1.241 c -5.129 1.499 -9.6 3.967 -13.287 7.335 C 52.422 49 52.181 49.087 51.939 49.087 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 45 85.521 c -0.552 0 -1 -0.447 -1 -1 v -5.472 c 0 -0.553 0.448 -1 1 -1 s 1 0.447 1 1 v 5.472 C 46 85.073 45.552 85.521 45 85.521 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 51.94 59.607 c -0.271 0 -0.541 -0.109 -0.738 -0.325 c -0.372 -0.408 -0.344 -1.041 0.063 -1.413 c 3.913 -3.574 8.648 -6.191 14.075 -7.778 c 0.53 -0.155 1.085 0.149 1.24 0.68 c 0.155 0.529 -0.149 1.085 -0.68 1.24 c -5.13 1.5 -9.601 3.968 -13.286 7.335 C 52.423 59.521 52.182 59.607 51.94 59.607 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 12.927 35.469 c -0.483 0 -0.908 -0.351 -0.986 -0.843 c -0.086 -0.545 0.285 -1.058 0.831 -1.145 c 8.483 -1.349 17.084 -1.357 25.564 -0.022 c 0.546 0.086 0.918 0.598 0.833 1.143 c -0.086 0.546 -0.599 0.918 -1.143 0.833 c -8.273 -1.302 -16.664 -1.294 -24.939 0.022 C 13.033 35.465 12.979 35.469 12.927 35.469 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 12.928 45.991 c -0.483 0 -0.908 -0.351 -0.987 -0.843 c -0.086 -0.545 0.285 -1.058 0.831 -1.145 c 8.481 -1.35 17.083 -1.357 25.564 -0.022 c 0.546 0.086 0.918 0.598 0.833 1.143 c -0.086 0.546 -0.599 0.918 -1.143 0.833 c -8.275 -1.301 -16.666 -1.294 -24.939 0.022 C 13.033 45.987 12.979 45.991 12.928 45.991 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 12.928 56.513 c -0.483 0 -0.908 -0.351 -0.987 -0.843 c -0.086 -0.546 0.285 -1.058 0.831 -1.145 c 8.483 -1.351 17.085 -1.357 25.564 -0.023 c 0.546 0.086 0.918 0.598 0.833 1.144 s -0.599 0.918 -1.143 0.833 c -8.272 -1.302 -16.664 -1.294 -24.939 0.021 C 13.033 56.509 12.979 56.513 12.928 56.513 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 12.927 67.033 c -0.483 0 -0.908 -0.351 -0.986 -0.843 c -0.086 -0.546 0.285 -1.058 0.831 -1.145 c 8.492 -1.352 17.103 -1.356 25.594 -0.019 c 0.545 0.087 0.918 0.599 0.832 1.144 c -0.085 0.546 -0.597 0.913 -1.144 0.833 c -8.283 -1.307 -16.685 -1.3 -24.968 0.017 C 13.033 67.029 12.979 67.033 12.927 67.033 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="d-table">
                        <h1 class="d-table-cell align-middle m-0 p-0 fw-light fs-2">Dziennik ></h1>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('journal.index', [1]) }}" class="text-decoration-none text-light">
                <div class="bg-warning mx-auto" style="width: 90%;">
                    <div class="d-flex justify-content-center">
                        <div class="p-2 ps-0 pe-0">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" viewBox="0 0 256 256" xml:space="preserve">

                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 45 88.11 h 40.852 c 3.114 0 5.114 -3.307 3.669 -6.065 L 48.669 4.109 c -1.551 -2.959 -5.786 -2.959 -7.337 0 L 0.479 82.046 c -1.446 2.758 0.555 6.065 3.669 6.065 H 45 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(214,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 45 64.091 L 45 64.091 c -1.554 0 -2.832 -1.223 -2.9 -2.776 l -2.677 -25.83 c -0.243 -3.245 2.323 -6.011 5.577 -6.011 h 0 c 3.254 0 5.821 2.767 5.577 6.011 L 47.9 61.315 C 47.832 62.867 46.554 64.091 45 64.091 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <circle cx="44.995999999999995" cy="74.02600000000001" r="4.626" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                </g>
                            </svg>
                        </div>
                        <div class="d-table">
                            <h1 class="d-table-cell align-middle m-0 p-0 ps-2 text-dark fw-light">Uwagi</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>

@endsection
