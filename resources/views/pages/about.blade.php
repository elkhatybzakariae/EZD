<!DOCTYPE html>
<html>

<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"
    tabindex="0">
    {{-- <header id="header" class="site-header header-scrolled position-fixed text-black bg-light">
        <nav id="header-nav" class="navbar navbar-expand-lg px-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('storage/ezd.png') }}" class="logo" height="35 px" width="35 x">
                </a>
                <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <svg class="navbar-icon">
                        <use xlink:href="#navbar-icon"></use>
                    </svg>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar"
                    aria-labelledby="bdNavbarOffcanvasLabel">
                    <div class="offcanvas-header px-4 pb-0">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('storage/ezd.png') }}" class="logo" height="35 px" width="35 x">
                        </a>
                        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                            aria-label="Close" data-bs-target="#bdNavbar"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul id="navbar"
                            class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link me-4 active" href="{{ route('landing') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#company-services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#projects">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4"  href="{{route('about')}}">About me</a>
                            </li>
                            <li class="nav-item">
                                <div class="user-items ps-5">
                                    <ul class="d-flex justify-content-end list-unstyled">
                                        <li class="search-item pe-3">
                                            <a href="#" class="search-button">
                                                <svg class="search">
                                                    <use xlink:href="#search"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="pe-3">
                                            <a href="#">
                                                <svg class="user">
                                                    <use xlink:href="#user"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <svg class="cart">
                                                    <use xlink:href="#cart"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header> --}}
    
    <section id="about" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <!-- Header Section -->
            <div class="text-center mb-10">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800">About Me</h1>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Hi, I’m EL-KHATYB Zakariae, a passionate and driven individual with a strong interest in digital
                    development. I thrive on exploring new technologies and am constantly inspired by the ever-evolving
                    world of innovation. My expertise lies in web development, programming, and user interface design,
                    and I am proficient in web development languages as well as office software such as Word, Excel, and
                    PowerPoint.
                </p>
                <p>
                    I am currently seeking an apprenticeship at an innovative company where I can apply my technical
                    skills and creativity to real-world projects. My goal is to contribute to impactful solutions while
                    continuing to grow and learn in this dynamic field. I am highly motivated, eager to take on
                    challenges, and committed to delivering high-quality work.
                </p>
                <p>
                    When I’m not coding, you can find me working on personal projects to expand my skill set. I believe
                    in the power of collaboration and am excited to bring my enthusiasm and dedication to a team that
                    values innovation and growth.
                </p>
                <p>
                    I believe in lifelong learning and am always eager to take on new challenges that help me grow both
                    personally and professionally.</p>
                <p>Let’s connect and build something extraordinary together!</p>
            </div>
        </div>
    </section>



    @include('master.footer')
    @include('master.footer-bottom')

    <script src="{{ asset('storage/js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('storage/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('storage/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('storage/js/script.js') }}"></script>
</body>

</html>
