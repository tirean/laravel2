<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Down & Feather Company - Luxury Duvets & Pillows</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <style rel="stylesheet">
        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-Thin.woff')}});
        font-weight:100;
        font-style:normal
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-ThinItalic.woff')}});
        font-weight:100;
        font-style:italic
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-ExtraLight.woff')}});
        font-weight:200;
        font-style:normal
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-ExtraLightItalic.woff')}});
        font-weight:200;
        font-style:italic
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-Light.woff')}});
        font-weight:300;
        font-style:normal
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-LightItalic.woff')}});
        font-weight:300;
        font-style:italic
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-Regular.woff')}});
        font-weight:400;
        font-style:normal
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-RegularItalic.woff')}});
        font-weight:400;
        font-style:italic
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-Medium.woff')}});
        font-weight:500;
        font-style:normal
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-MediumItalic.woff')}});
        font-weight:500;
        font-style:italic
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-SemiBold.woff')}});
        font-weight:600;
        font-style:normal
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-SemiBoldItalic.woff')}});
        font-weight:600;
        font-style:italic
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-Bold.woff')}});
        font-weight:700;
        font-style:normal
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-BoldItalic.woff')}});
        font-weight:700;
        font-style:italic
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-Black.woff')}});
        font-weight:800;
        font-style:normal
        }

        @font-face {
            font-family: Metropolis;
            src:url({{ asset('fonts/Metropolis-BlackItalic.woff')}});
        font-weight:800;
        font-style:italic
        }


        body {
            font-family: 'Metropolis', sans-serif;
            color: #69707a;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #363d47;
        }

        .lead {
            font-size: 1rem;
            font-weight: 400;
        }

        header {
            --bs-bg-opacity: 1;
            background: #ffffff;
        }

        a {
            text-decoration: none;
            color: #0000008c;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }

        a:hover {
            color: #000000b3;
        }


        section.index .carousel {
            position: relative;
            max-height: 30rem;
            overflow: hidden;
        }

        section.index .carousel-item {
            max-height: 30rem;
        }

        section.index .carousel-caption {
            position: absolute;
            bottom: 30%;
            left: 15%;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: #363d47;
            text-align: center;
            font-size: 1.2rem;
        }
        section.index  .carousel-caption p {
            font-weight: 500;
            font-size: 1.2rem;
        }       
        section.index  .carousel-caption h2 {
            font-weight: 600;
            font-size: 2rem;
        }

        .text-danger {
            margin-top: 0.3rem;
            position: relative;
            display: block;
        }

        /* Galerie */

        .notification {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 5px 15px;
            margin: 0;
            text-align: center;
            z-index: 1;
            background: var(--yellow);
        }

        @media (max-width: 700px) {
            .notification {
                display: none;
            }
             
            section.index  .carousel-caption p {
                color: #ffffff;
        }       
            section.index  .carousel-caption h2 {
                color: #ffffff;
            }
        }
        @media (min-width: 700px) {
            
            section.index .carousel-caption {
                color: #ffffff;
                font-size: 1.2rem;
                background: #a32cc457;
                padding: 18px;
                border-radius: 2px;
            }
            section.index  .carousel-caption p {
                color: #ffffff;
        }       
            section.index  .carousel-caption h2 {
                color: #ffffff;
            }
        }


        /* IMAGE GRID STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        .image-grid figure {
            margin-bottom: 0;
        }

        .image-grid img {
            box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.2s;
        }

        .image-grid a:hover img {
            box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.35);
        }


        /* LIGHTBOX STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        .lightbox-modal .modal-content {
            background: var(--lightbox);
        }

        .lightbox-modal .btn-close {
            position: absolute;
            top: 20px;
            right: 18px;
            font-size: 1.2rem;
            z-index: 10;
        }

        .lightbox-modal .modal-body {
            display: flex;
            align-items: center;
            padding: 0;
            text-align: center;
        }

        .lightbox-modal img {
            width: auto;
            max-height: 100vh;
            max-width: 100%;
        }

        .lightbox-modal .carousel-caption {
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(36, 36, 36, 0.75);
        }


        .lightbox-modal .carousel-control-prev,
        .lightbox-modal .carousel-control-next {
            top: 50%;
            bottom: auto;
            transform: translateY(-50%);
            width: auto;
        }

        .lightbox-modal .carousel-control-prev {
            left: 10px;
        }

        .lightbox-modal .carousel-control-next {
            right: 10px;
        }

        svg.wave {
            margin-top: -2rem;
            position: relative;
        }

        .jumbotron .display-3 {
            font-size: 2.5rem;
            text-align: center;
            font-weight: 500;
            line-height: 3rem;
            color: #fff;
        }


        .gradient {
            background-color: #a32cc4 !important;
            background-image: linear-gradient(128deg, #a32cc4 0%, #710193 100%) !important;
        }

        .jumbotron p {
            color: rgba(255, 255, 255, 0.5);
            font-size: 1.125rem;
            line-height: 1.75rem;
        }


        .jumbotron {
            text-align: center;
        }

        hr {
            color: #c38ad4;
        }

        .secondary-color {
            color: #a32cc4;
        }

        .btn-purple {
            background: #a32cc4;
            border-color: #a32cc4;
        }

        .btn-purple:hover {
            background: #710193;
            border-color: #710193;
        }

        label.form-label {
            padding-top: 5px;
        }

        .feather-contact-img {
            max-width: 61%;
            opacity: 0.3;
            left: 60%;
            display: block;
            top: 20%;
            position: relative;
        }

        .bd-placeholder-img {
            border: 1px solid rgb(240 226 244);
            border-radius: 0.1875rem;
        }

        nav a {
            font-weight: 500;
            padding-right: 0.5rem;
            color: #363d47;
        }


        footer {
            background: #dadcde;
            color: #363d47;
            font-size: 0.9rem;
        }

        footer a {
            color: #363d47;
        }

        .logo img {
            max-height: 60px;
        }


        @media (max-width: 768px) {

            .navbar .nav-item {
                text-align: center;
                line-height: 3;
            }

            .navbar .nav-item a {
                padding-right: 0;
                margin-right: 0 !important;
            }
        }
    </style>

</head>

<body>

    <section class="gradient">
 
        <header class="site-header sticky-top py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="container navbar navbar-expand-md">
                            <a href="/" class="d-flex align-items-center text-dark text-decoration-none logo"><img
                                    src="{{ asset('img/logo.png') }}" class="img-fluid"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <ul class="navbar-nav d-flex mt-2 mt-md-0 ms-md-auto">
                                    <li class="nav-item">
                                        <a class="me-3 py-2 text-dark text-decoration-none" href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="me-3 py-2 text-dark text-decoration-none" href="/products/">Our
                                            Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="me-3 py-2 text-dark text-decoration-none" href="/about/">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="py-2 text-dark text-decoration-none" href="/contact/">Contact</a>
                                    </li>
                                </ul>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>



        </header>
        {{-- VIEW OUTPUT --}}
        @yield('content')

        </div>



        <!-- FOOTER -->
        <svg fill="#fff" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75" class="wave"
            style="pointer-events: none;transform: rotate(180deg);margin-bottom: -8rem;position: relative;">
            <g fill="#fff" class="b">
                <path
                    d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"
                    class="c"></path>
            </g>
            <g fill="#fff" class="b">
                <path
                    d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"
                    class="d"></path>
            </g>
            <g fill="#fff" class="b">
                <path
                    d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"
                    class="d"></path>
            </g>
            <g fill="#fff" class="b">
                <path
                    d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"
                    class="d"></path>
            </g>
        </svg>
        <footer class="pt-5 mt-5 pb-4">
            <div class="container">
                <p class="float-end"><a href="#">Back to top</a></p>
                <p>&copy; 2022 Down & Feather <span class="d-none d-sm-inline"> - Luxury Duvets & Pillows</span> <a
                        class="d-none d-sm-inline" href="/about/">&middot; About Us &middot; </a> <a
                        class="d-none d-sm-inline" href="/contact/">Contact</a></p>
        </footer>
        </main>


        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js'></script>

        @if (Request::path() == 'products')
        <script src="{{ asset('js/js.js') }}"></script>
        @endif

</body>

</html>