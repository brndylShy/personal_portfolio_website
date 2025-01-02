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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/main.css'])
    @else

    @endif
</head>

<body class="font-sans antialiased dark:bg-white dark:text-black/50">
    <section id="hero" class="hero section">
        <div>
            <img src="{{ asset('img/mona.jpg') }}" alt="User Icon" class="full-page-image">
            <div class="hero-content">
                <h2>Brendyl Shayne M. Singayao</h2>
                <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer">a Frontend
                        Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
                <div class="social-links">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            &nbsp;
            <h2>About</h2>
            <p class="aboutp1">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum
                quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <!-- <img src="assets/img/profile-img.jpg" class="img-fluid" alt=""> -->
                    <img src="{{ asset('img/monaygraduate.jpg') }}" class="img-fluid" alt="">

                </div>
                <div class="col-lg-8 content">
                    <h2>UI/UX Designer &amp; Web Developer.</h2>
                    <p class="fst-italic py-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May
                                        1995</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                    <span>www.example.com</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456
                                        7890</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New York,
                                        USA</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                    <span>email@example.com</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                    <span>Available</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p class="py-3">
                        Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci
                        omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque
                        neque.
                    </p>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->
    &nbsp;&nbsp;




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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>