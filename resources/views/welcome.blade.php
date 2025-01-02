<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio</title>

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/main.css'])
    @else

    @endif
</head>

<body class="font-sans antialiased dark:bg-white dark:text-black/50">
    <div class="bg-gray-50 text-black/50 dark:bg-white dark:text-black/50">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-black">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                <main class="mt-6">
                    <header id="header" class="header d-flex flex-column justify-content-center">



                        <nav id="navmenu" class="navmenu">
                            <ul>
                                <li><a href="#hero" class="active"><i
                                            class="fa-solid fa-house"></i><span>Home</span></a></li>
                                <li><a href="#about"><i class="fa-solid fa-person"></i><span>About</span></a></li>
                                <li><a href="#resume"><i class="fa-solid fa-book"></i><span>Resume</span></a></li>
                                <li><a href="#portfolio"><i
                                            class="fa-solid fa-address-card"></i><span>Portfolio</span></a>
                                </li>
                                <li><a href="#contact"><i
                                            class="fa-solid fa-phone-flip"></i></i><span>Contact</span></a>
                                </li>
                            </ul>
                        </nav>

                    </header>
                </main>


            </div>
        </div>
    </div>
</body>

</html>