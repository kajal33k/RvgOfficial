@extends('component.main')
@section('content')
    {{-- STYLE --}}
    <style>
        html {
            scroll-behavior: smooth;
        }

        .testimonial-container {
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
            height: 60vh;
        }

        .testimonial-slide {
            scroll-snap-align: start;
            height: 50vh;
        }

        @media (min-width: 768px) {
            .testimonial-container {
                scroll-snap-type: none;
                overflow-y: visible;
                height: auto;
            }

            .testimonial-slide {
                height: auto;
            }
        }
    </style>
    <!-- Main Content -->
    <section class="relative text-center px-4 py-12 md:py-20 bg-[#fefefe]">
        <!-- Main Title -->
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-gray-900 leading-snug mb-1 font-[Montserrat] "
            data-aos="fade-up" data-aos-delay="200">
            We design. We develop.
        </h1>

        <div class="relative flex items-center justify-center lg:min-h-[300px] h-auto  overflow-hidden px-4">
            <!-- Left Top Video -->
            <video autoplay muted loop playsinline
                class="absolute top-0 left-0 w-24 md:w-32 lg:w-40 rounded-2xl shadow-xl z-0 lg:mx-44 hidden md:block">
                <source src="{{ asset('asset/image/Searching For Job.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <!-- Center Text -->
            <div class="relative z-10 text-center">
                <h1 class="text-3xl md:text-5xl lg:text-7xl font-bold font-[Montserrat] text-gray-900 leading-snug">
                    We deliver your vision <br> to the world
                </h1>

            </div>

            <!-- Right Bottom Video -->
            <video autoplay muted loop playsinline
                class="absolute bottom-0 right-0 w-24 md:w-32 lg:w-40 rounded-2xl shadow-xl z-0 lg:mx-44 hidden md:block">
                <source src="{{ asset('asset/image/Searching For Job.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Subtext -->
        <p class="mt-6 text-base md:text-lg text-gray-600 max-w-2xl mx-auto px-2" data-aos="fade-up" data-aos-delay="400">
            Explore our work and discover your potential.
        </p>

        <!-- Call to Action -->
        <div class="mt-8" data-aos="fade-up" data-aos-delay="500">
            <a href="#portfolio"
                class="inline-block px-8 py-3 bg-black text-white hover:bg-white hover:text-black border-2 border-black font-semibold text-lg rounded-full shadow-md transition duration-300 ease-in-out hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                Show me the magic
            </a>
        </div>
    </section>
    <!-- Client Logos Section -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-10" data-aos="fade-up">
                Trusted by clients worldwide
            </h2>

            <div class="flex flex-wrap justify-center items-center gap-6 md:gap-10">
                <div data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('asset/image/a.svg') }}" alt="Client Logo A"
                        class="w-28 md:w-32 h-auto object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('asset/image/b.svg') }}" alt="Client Logo B"
                        class="w-28 md:w-32 h-auto object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('asset/image/c.svg') }}" alt="Client Logo C"
                        class="w-28 md:w-32 h-auto object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('asset/image/d.svg') }}" alt="Client Logo D"
                        class="w-28 md:w-32 h-auto object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div data-aos="fade-up" data-aos-delay="500">
                    <img src="{{ asset('asset/image/e.svg') }}" alt="Client Logo E"
                        class="w-28 md:w-32 h-auto object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div data-aos="fade-up" data-aos-delay="600">
                    <img src="{{ asset('asset/image/f.svg') }}" alt="Client Logo F"
                        class="w-28 md:w-32 h-auto object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
            </div>
        </div>
    </section>
    <!-- OUR WORK SECTION -->
    <section class="bg-black lg:py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Section Heading -->
            <h1 id="ourWorkTitle"
                class="text-center py-8 lg:py-12 text-white font-[Montserrat] font-extrabold text-6xl sm:text-7xl lg:text-8xl transition-all duration-7000 ease-in-out lg:mb-16"
                data-aos="zoom-out-up">
                OUR WORK
            </h1>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4 md:px-8 lg:px-16 lg:py-16">

                <!-- Card 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 transform hover:-translate-y-2"
                    data-aos="fade-up">
                    <div class="p-5 flex justify-between items-start">
                        <h3 class="text-xl font-bold text-gray-900">Smart Home Hub</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">San
                            Francisco</span>
                    </div>
                    <img src="{{ asset('asset/image/work1.webp') }}" alt="Smart Home Hub" class="w-full h-96 object-cover">
                    <div class="p-5">
                        <p class="text-white mb-4">
                            A central control system for all your smart home devices with voice control and AI automation
                            features.
                        </p>
                        <button
                            class="w-full py-2 px-4 bg-black hover:bg-red-700 hover:text-black  text-red-600  rounded-full font-medium transition-colors duration-300">
                            See Details
                        </button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-[#333333] rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="p-5 flex justify-between items-start">
                        <h3 class="text-xl font-bold text-white">Fitness Tracker</h3>
                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">New
                            York</span>
                    </div>
                    <img src="{{ asset('asset/image/work2.webp') }}" alt="Fitness Tracker" class="w-full h-96 object-cover">
                    <div class="p-5">
                        <p class="text-gray-300 mb-4">
                            Advanced wearable tech that tracks workouts, heart rate, sleep patterns, and daily activity.
                        </p>
                        <button
                            class="w-full py-2 px-4 bg-black hover:bg-red-700 hover:text-black  text-red-600  rounded-full font-medium transition-colors duration-300">
                            See Details
                        </button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-red-500 rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="p-5 flex justify-between items-start">
                        <h3 class="text-xl font-bold text-white">VR Headset</h3>
                        <span
                            class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">Seattle</span>
                    </div>
                    <img src="{{ asset('asset/image/work3.webp') }}" alt="VR Headset" class="w-full h-96 object-cover">
                    <div class="p-5">
                        <p class="text-white mb-4">
                            Immersive VR experience with 4K resolution, 120Hz refresh, and full motion tracking.
                        </p>
                        <button
                            class="w-full py-2 px-4 bg-black hover:bg-red-700 hover:text-black  text-red-600  rounded-full font-medium transition-colors duration-300">
                            See Details
                        </button>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-red-600 rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 transform hover:-translate-y-2"
                    data-aos="fade-up">
                    <div class="p-5 flex justify-between items-start">
                        <h3 class="text-xl font-bold text-white">Wireless Earbuds</h3>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full">Austin</span>
                    </div>
                    <img src="{{ asset('asset/image/work4.webp') }}" alt="Wireless Earbuds"
                        class="w-full h-96 object-cover">
                    <div class="p-5">
                        <p class="text-white mb-4">
                            Premium sound quality with noise cancellation and 30-hour battery life.
                        </p>
                        <button
                            class="w-full py-2 px-4 bg-black hover:bg-red-700 hover:text-black  text-red-600  rounded-full font-medium transition-colors duration-300">
                            See Details
                        </button>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="p-5 flex justify-between items-start">
                        <h3 class="text-xl font-bold text-white">Smart Watch</h3>
                        <span
                            class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-3 py-1 rounded-full">Boston</span>
                    </div>
                    <img src="{{ asset('asset/image/work5.webp') }}" alt="Smart Watch" class="w-full h-96 object-cover">
                    <div class="p-5">
                        <p class="text-white mb-4">
                            Stay connected with calls, messages, and health monitoring from your wrist.
                        </p>
                        <button
                            class="w-full py-2 px-4 bg-black hover:bg-red-700 hover:text-black  text-red-600  rounded-full font-medium transition-colors duration-300">
                            See Details
                        </button>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="bg-black rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="p-5 flex justify-between items-start">
                        <h3 class="text-xl font-bold text-white">Drone Pro</h3>
                        <span
                            class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-3 py-1 rounded-full">Chicago</span>
                    </div>
                    <img src="{{ asset('asset/image/work6.webp') }}" alt="Drone Pro" class="w-full h-96 object-cover">
                    <div class="p-5">
                        <p class="text-gray-300 mb-4">
                            4K drone with 30x zoom and 5-mile range for aerial photo & video.
                        </p>
                        <button
                            class="w-full py-2 px-4 bg-black hover:bg-red-700 hover:text-black  text-red-600  rounded-full font-medium transition-colors duration-300">
                            See Details
                        </button>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-black rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 transform hover:-translate-y-2"
                    data-aos="fade-up">
                    <div class="p-5 flex justify-between items-start">
                        <h3 class="text-xl font-bold text-white">Wireless Earbuds</h3>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full">Austin</span>
                    </div>
                    <img src="{{ asset('asset/image/work4.webp') }}" alt="Wireless Earbuds"
                        class="w-full h-96 object-cover">
                    <div class="p-5">
                        <p class="text-white mb-4">
                            Premium sound quality with noise cancellation and 30-hour battery life.
                        </p>
                        <button
                            class="w-full py-2 px-4 bg-black hover:bg-red-700 hover:text-black  text-red-600  rounded-full font-medium transition-colors duration-300">
                            See Details
                        </button>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="bg-red-600 rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="p-5 flex justify-between items-start">
                        <h3 class="text-xl font-bold text-white">Smart Watch</h3>
                        <span
                            class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-3 py-1 rounded-full">Boston</span>
                    </div>
                    <img src="{{ asset('asset/image/work5.webp') }}" alt="Smart Watch" class="w-full h-96 object-cover">
                    <div class="p-5">
                        <p class="text-white mb-4">
                            Stay connected with calls, messages, and health monitoring from your wrist.
                        </p>
                        <button
                            class="w-full py-2 px-4 bg-black hover:bg-red-700 hover:text-black  text-red-600 rounded-full font-medium transition-colors duration-300">
                            See Details
                        </button>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="p-5 flex justify-between items-start">
                        <h3 class="text-xl font-bold text-white">Drone Pro</h3>
                        <span
                            class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-3 py-1 rounded-full">Chicago</span>
                    </div>
                    <img src="{{ asset('asset/image/work6.webp') }}" alt="Drone Pro" class="w-full h-96 object-cover">
                    <div class="p-5">
                        <p class="text-gray-300 mb-4">
                            4K drone with 30x zoom and 5-mile range for aerial photo & video.
                        </p>
                        <button
                            class="w-full py-2 px-4 bg-black hover:bg-red-700 hover:text-black  text-red-600  rounded-full font-medium transition-colors duration-300">
                            See Details
                        </button>
                    </div>
                </div>

            </div>

        </div>

        <!-- Call to Action -->
        <div class="mt-4 flex justify-center" data-aos="fade-up" data-aos-delay="500">
            <a href="#portfolio"
                class="inline-block px-8 py-3 bg-white  text-black hover:bg-red-600 text-lg font-semibold rounded-full shadow-lg  hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                Request a Quote
            </a>
        </div>
    </section>
    {{-- what we do --}}
    <div class="bg-black min-h-full flex flex-col items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <!-- Section Heading -->
        <h1 id="ourWorkTitle"
            class="text-center text-white font-extrabold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl mb-16 transition-all duration-700 ease-in-out"
            data-aos="zoom-out-up" data-aos-mobile="none">
            WHAT WE DO
        </h1>

        <section class="w-full px-4 py-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-4 items-stretch">

                <!-- Left Column - Design & Branding -->
                <div data-aos="fade-right" data-aos-mobile="none"
                    class="space-y-6 w-full md:w-3/4  lg:w-[30vw] lg:h-[100vh] h-auto shadow-lg rounded-2xl md:p-8 p-4 bg-white">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4 font-[Montserrat]">
                        Design & Branding
                    </h2>
                    <p class="text-black text-lg mb-6">
                        From logo creation to full-scale branding strategies, we design visuals that captivate and make your
                        brand impossible to ignore!
                    </p>
                    <div class="mb-6 my-4 py-4">
                        <img src="{{ asset('asset/image/do1.webp') }}" alt=""
                            class="w-full h-64 object-cover rounded-lg shadow-md mb-4">
                    </div>
                    <p class="text-black text-lg font-medium">
                        Ready to see the impact of great design?
                    </p>
                    <a href="#our-work"
                        class="inline-block mt-6 px-6 py-3 mb-6 bg-black text-white rounded-xl shadow hover:bg-gray-800 transition duration-300">
                        Explore Our Designs
                    </a>
                </div>

                <!-- Right Column - Services Grid -->
                <div class="grid grid-rows-2 gap-8 h-full" data-aos="fade-left" data-aos-mobile="none">
                    <!-- Top Card - Web Development -->
                    <div
                        class="group relative overflow-hidden rounded-2xl bg-white p-6 sm:p-8 shadow-lg transition-all duration-300 hover:shadow-2xl">
                        <div class="flex flex-col md:flex-row justify-between">
                            <div class="md:w-2/3 mb-6 md:mb-0">
                                <h2 class="text-2xl sm:text-3xl font-extrabold text-black mb-4">
                                    Web Development
                                </h2>
                                <p class="text-black text-opacity-90 text-sm sm:text-base leading-relaxed">
                                    We build websites and apps that don't just look good but perform flawlessly. Our
                                    development
                                    services are tailored to deliver robust, scalable, and user-friendly solutions for
                                    businesses
                                    of all sizes. From concept to deployment, we've got you covered!
                                </p>
                            </div>
                            <div class="md:w-1/3 flex items-center justify-center">
                                <img src="{{ asset('asset/image/do1.webp') }}" alt="Web Development illustration"
                                    class="w-full max-w-xs object-contain transition-transform duration-500 group-hover:scale-110">
                            </div>
                        </div>

                        <div class="mt-6">
                            <button
                                class="flex items-center gap-2 rounded-xl border-2 border-red-500 px-5 py-3 text-sm font-semibold text-black transition hover:bg-red-600 hover:text-black">
                                Explore Web Services
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </button>
                        </div>

                        <span
                            class="absolute -bottom-12 -right-12  w-32 rounded-full bg-white/20 blur-3xl transition-all duration-500 group-hover:opacity-80"></span>
                    </div>

                    <!-- Bottom Cards - UI/UX and SEO -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <!-- UI/UX Card -->
                        <div
                            class="bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                            <div class="p-6 h-full flex flex-col">
                                <div class="flex flex-col md:flex-row items-start justify-between gap-4 mb-4">
                                    <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900">
                                        UI/UX
                                    </h2>
                                    <img src="{{ asset('asset/image/do2.svg') }}" alt="UI/UX Design illustration"
                                        class="w-20 h-20 object-contain">
                                </div>
                                <p class="text-gray-700 text-sm sm:text-base mb-6 flex-grow">
                                    From Figma prototypes to design systems and micro-interactions, we ensure your product
                                    is not only functional but also beautifully intuitive and engaging for every user.
                                </p>
                            </div>
                        </div>

                        <!-- SEO Card -->
                        <div
                            class="bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                            <div class="p-6 h-full flex flex-col">
                                <div class="flex flex-col md:flex-row items-start justify-between gap-4 mb-4">
                                    <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900">
                                        SEO
                                    </h2>
                                    <img src="{{ asset('asset/image/do3.svg') }}" alt="SEO illustration"
                                        class="w-20 h-20 object-contain">
                                </div>
                                <p class="text-gray-700 text-sm sm:text-base mb-6 flex-grow">
                                    We base our SEO strategy on comprehensive keyword research and competitive analysis to
                                    give you the edge over the competition.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Section Wrapper -->
    <div class="py-12 md:py-20 px-6 md:px-16 lg:px-24">
        <!-- Section Title -->
        <h1
            class="text-center text-gray-900 font-extrabold text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl mb-12 md:mb-16">
            4 Steps to Launch Your Project
        </h1>

        <!-- Steps Container -->
        <div class="max-w-7xl mx-auto space-y-20 md:space-y-28">
            <!-- Step 01 -->
            <section id="step1" class="step-card group relative">
                <div class="absolute -inset-4 rounded-xl opacity-0 group-hover:opacity-100 blur transition duration-300">
                </div>
                <div class="relative max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-8 md:gap-12">
                    <!-- Left: Text + Progress -->
                    <div class="order-2 lg:order-1">
                        <div class="text-4xl font-bold text-red-600 mb-2">01</div>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                            Discovery Call & Planning
                        </h2>
                        <p class="mt-4 text-gray-600 text-base md:text-lg">
                            We start by understanding your needs and goals, then create a clear plan to guide the project.
                        </p>
                        <!-- Progress Bar -->
                        <div class="mt-8 w-full max-w-md relative">
                            <div class="mb-2 flex justify-between text-sm text-gray-600">
                                <span>Progress</span>
                                <span id="progress-percent-1">0%</span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 rounded-full overflow-hidden">
                                <div id="progress-bar-1" class="h-full bg-black rounded-full progress-animate"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Illustration -->
                    <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
                        <div
                            class="relative w-64 h-64 sm:w-72 sm:h-72 md:w-80 md:h-80  rounded-2xl p-4 shadow-lg flex items-center justify-center">
                            <img src="{{ asset('asset/image/do1.webp') }}" alt="Discovery Illustration"
                                class="w-full h-full object-contain" />

                        </div>
                    </div>
                </div>
            </section>

            <!-- Step 02 -->
            <section id="step2" class="step-card group relative">
                <div class="absolute -inset-4 rounded-xl opacity-0 group-hover:opacity-100 blur transition duration-300">
                </div>
                <div class="relative max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-8 md:gap-12">
                    <!-- Left: Illustration -->
                    <div class="flex justify-center lg:justify-start">
                        <div
                            class="relative w-64 h-64 sm:w-72 sm:h-72 md:w-80 md:h-80  rounded-2xl p-4 shadow-lg flex items-center justify-center">
                            <img src="{{ asset('asset/image/do1.webp') }}" alt="Design & Execution"
                                class="w-full h-full object-contain" />

                        </div>
                    </div>

                    <!-- Right: Text Content -->
                    <div>
                        <div class="text-4xl font-bold text-red-600 mb-2">02</div>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                            Design & Execution
                        </h2>
                        <p class="mt-4 text-gray-600 text-base md:text-lg">
                            We transform concepts into reality, designing your visuals with precise execution.
                        </p>
                        <!-- Progress Bar -->
                        <div class="mt-8 w-full max-w-md relative">
                            <div class="mb-2 flex justify-between text-sm text-gray-600">
                                <span>Progress</span>
                                <span id="progress-percent-2">0%</span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 rounded-full overflow-hidden">
                                <div id="progress-bar-2" class="h-full bg-black rounded-full progress-animate"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Step 03 -->
            <section id="step3" class="step-card group relative">
                <div class="absolute -inset-4 rounded-xl opacity-0 group-hover:opacity-100 blur transition duration-300">
                </div>
                <div class="relative max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-8 md:gap-12">
                    <!-- Left: Text + Progress -->
                    <div class="order-2 lg:order-1">
                        <div class="text-4xl font-bold text-red-600 mb-2">03</div>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                            Development & Testing
                        </h2>
                        <p class="mt-4 text-gray-600 text-base md:text-lg">
                            Our team builds your solution with clean code and rigorous testing for optimal performance.
                        </p>
                        <!-- Progress Bar -->
                        <div class="mt-8 w-full max-w-md relative">
                            <div class="mb-2 flex justify-between text-sm text-gray-600">
                                <span>Progress</span>
                                <span id="progress-percent-3">0%</span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 rounded-full overflow-hidden">
                                <div id="progress-bar-3" class="h-full bg-black rounded-full progress-animate"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Illustration -->
                    <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
                        <div
                            class="relative w-64 h-64 sm:w-72 sm:h-72 md:w-80 md:h-80  rounded-2xl p-4 shadow-lg flex items-center justify-center">
                            <img src="{{ asset('asset/image/do1.webp') }}" alt="Development Illustration"
                                class="w-full h-full object-contain" />
                            <div
                                class="absolute -bottom-4 -right-4 bg-white rounded-xl shadow-md px-4 py-2 text-sm font-medium text-cyan-600">
                                Step 3
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Step 04 -->
            <section id="step4" class="step-card group relative">
                <div class="absolute -inset-4 rounded-xl opacity-0 group-hover:opacity-100 blur transition duration-300">
                </div>
                <div class="relative max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-8 md:gap-12">
                    <!-- Left: Illustration -->
                    <div class="flex justify-center lg:justify-start">
                        <div
                            class="relative w-64 h-64 sm:w-72 sm:h-72 md:w-80 md:h-80  rounded-2xl p-4 shadow-lg flex items-center justify-center">
                            <img src="{{ asset('asset/image/do1.webp') }}" alt="Launch & Support"
                                class="w-full h-full object-contain" />
                            <div
                                class="absolute -bottom-4 -left-4 bg-white rounded-xl shadow-md px-4 py-2 text-sm font-medium text-green-600">
                                Step 4
                            </div>
                        </div>
                    </div>

                    <!-- Right: Text Content -->
                    <div>
                        <div class="text-4xl font-bold text-red-600 mb-2">04</div>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                            Launch & Support
                        </h2>
                        <p class="mt-4 text-gray-600 text-base md:text-lg">
                            We deploy your project and provide ongoing support to ensure continued success.
                        </p>
                        <!-- Progress Bar -->
                        <div class="mt-8 w-full max-w-md relative">
                            <div class="mb-2 flex justify-between text-sm text-gray-600">
                                <span>Progress</span>
                                <span id="progress-percent-4">0%</span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 rounded-full overflow-hidden">
                                <div id="progress-bar-4" class="h-full bg-black rounded-full progress-animate"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all progress bars and their percentage displays
            const progressBars = [{
                    bar: document.getElementById('progress-bar-1'),
                    percent: document.getElementById('progress-percent-1')
                },
                {
                    bar: document.getElementById('progress-bar-2'),
                    percent: document.getElementById('progress-percent-2')
                },
                {
                    bar: document.getElementById('progress-bar-3'),
                    percent: document.getElementById('progress-percent-3')
                },
                {
                    bar: document.getElementById('progress-bar-4'),
                    percent: document.getElementById('progress-percent-4')
                }
            ];

            // Get all step sections
            const steps = [
                document.getElementById('step1'),
                document.getElementById('step2'),
                document.getElementById('step3'),
                document.getElementById('step4')
            ];

            // Variables to track scroll position
            let lastScrollTop = 0;
            let isScrolling = false;

            // Function to update progress bars
            function updateProgress(stepIndex, progress) {
                progressBars[stepIndex].bar.style.width = `${progress}%`;
                progressBars[stepIndex].percent.textContent = `${Math.round(progress)}%`;
            }

            // Function to handle scroll events
            function handleScroll() {
                if (isScrolling) return;

                isScrolling = true;

                const st = window.pageYOffset || document.documentElement.scrollTop;
                const scrollDirection = st > lastScrollTop ? 'down' : 'up';
                lastScrollTop = st <= 0 ? 0 : st;

                // Calculate visibility and progress for each step
                steps.forEach((step, index) => {
                    const rect = step.getBoundingClientRect();
                    const windowHeight = window.innerHeight;
                    const stepTop = rect.top;
                    const stepHeight = rect.height;

                    // Calculate visibility ratio (0 to 1)
                    let visibilityRatio = 0;
                    if (stepTop < windowHeight && stepTop + stepHeight > 0) {
                        // Step is in viewport
                        const visibleHeight = Math.min(windowHeight, stepTop + stepHeight) - Math.max(0,
                            stepTop);
                        visibilityRatio = visibleHeight / stepHeight;
                    }

                    // Get current progress
                    const currentWidth = parseFloat(progressBars[index].bar.style.width) || 0;

                    // Calculate new progress based on scroll direction
                    let newProgress = currentWidth;
                    if (scrollDirection === 'down') {
                        // Increase progress when scrolling down
                        newProgress = Math.min(100, currentWidth + (visibilityRatio * 2));
                    } else {
                        // Decrease progress when scrolling up
                        newProgress = Math.max(0, currentWidth - (visibilityRatio * 2));
                    }

                    // Update progress if changed
                    if (Math.abs(newProgress - currentWidth) > 1) {
                        updateProgress(index, newProgress);
                    }
                });

                isScrolling = false;
            }

            // Throttle scroll events for better performance
            let scrollTimeout;
            window.addEventListener('scroll', function() {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(handleScroll, 10);
            });

            // Initialize progress bars to 0
            progressBars.forEach((pb, index) => {
                updateProgress(index, 0);
            });
        });
    </script>

    {{-- FOR DESKTOP SCREEN ---- --}}
    <main class="relative  md:block hidden">

        <!-- Section Title -->
        <h1 id="ourWorkTitle"
            class="text-center pt-24 px-4 font-extrabold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl mb-8 md:mb-12 lg:mb-16 transition-all duration-700 ease-in-out"
            data-aos="fade-up">
            What our clients say
        </h1>

        <!-- Slides Container -->
        <div class="relative">
            <!-- Slides -->
            <section class="slide sticky top-0 h-screen w-full flex items-center justify-center px-4 py-12 ">
                <div class="w-full max-w-5xl p-8 bg-white rounded-xl shadow-xl space-y-6">
                    <svg class="h-12 w-12 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <blockquote class="text-lg sm:text-xl font-medium leading-relaxed text-gray-700">
                        "As our first experience with web development, branding, and UI/UX design, Lemontree made the
                        process incredibly smooth..."
                    </blockquote>
                    <div>
                        <div class="text-lg font-semibold text-gray-900">Shadi & Jad, Munchiz</div>
                        <div class="text-sm text-gray-500">Canada</div>
                    </div>
                </div>
            </section>

            <section class="slide sticky top-0 h-screen w-full flex items-center justify-center px-4 py-12 ">
                <div class="w-full max-w-5xl p-8 bg-white rounded-xl shadow-xl space-y-6">
                    <svg class="h-12 w-12 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <blockquote class="text-lg sm:text-xl font-medium leading-relaxed text-gray-700">
                        "Lemontree transformed our digital presence completely. Their attention to detail and creative
                        approach..."
                    </blockquote>
                    <div>
                        <div class="text-lg font-semibold text-gray-900">Sarah Johnson, Bloom Cosmetics</div>
                        <div class="text-sm text-gray-500">United States</div>
                    </div>
                </div>
            </section>

            <section class="slide sticky top-0 h-screen w-full flex items-center justify-center px-4 py-12 ">
                <div class="w-full max-w-5xl p-8 bg-white rounded-xl shadow-xl space-y-6">
                    <svg class="h-12 w-12 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <blockquote class="text-lg sm:text-xl font-medium leading-relaxed text-gray-700">
                        "Working with Lemontree was a game-changer. Their designs are not just beautiful but highly
                        functional..."
                    </blockquote>
                    <div>
                        <div class="text-lg font-semibold text-gray-900">Michael Chen, TechNova</div>
                        <div class="text-sm text-gray-500">Singapore</div>
                    </div>
                </div>
            </section>

            <section class="slide sticky top-0 h-screen w-full flex items-center justify-center px-4 py-12 ">
                <div class="w-full max-w-5xl p-8 bg-white rounded-xl shadow-xl space-y-6">
                    <svg class="h-12 w-12 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <blockquote class="text-lg sm:text-xl font-medium leading-relaxed text-gray-700">
                        "Lemontree's rebranding strategy was exactly what our company needed. The result is an identity
                        customers love."
                    </blockquote>
                    <div>
                        <div class="text-lg font-semibold text-gray-900">Emma Rodriguez, Verde Living</div>
                        <div class="text-sm text-gray-500">Spain</div>
                    </div>
                </div>
            </section>
        </div>

    </main>

    {{-- FOR MOBILE SCREEN  --}}
    <main class="relative block md:hidden lg:hidden bg-gray-100">
        <!-- Section Title -->
        <h1 class="text-center pt-12 px-4 font-extrabold text-3xl mb-8">
            What our clients say
        </h1>

        <!-- Scrollable Container -->
        <div class="overflow-y-auto h-[500px] px-4 pb-0 my-24 relative space-y-6">

            <!-- Card 1 -->
            <div class="sticky top-0 z-[1] pointer-events-none">
                <div class="w-full max-w-5xl p-8 bg-white rounded-xl shadow-xl space-y-6">
                    <svg class="h-12 w-12 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <blockquote class="text-lg sm:text-xl font-medium leading-relaxed text-gray-700">
                        "As our first experience with web development, branding, and UI/UX design, Lemontree made the
                        process incredibly smooth..."
                    </blockquote>
                    <div>
                        <div class="text-lg font-semibold text-gray-900">Shadi & Jad, Munchiz</div>
                        <div class="text-sm text-gray-500">Canada</div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="sticky top-0 z-[2] pointer-events-none">
                <div class="w-full max-w-5xl p-8 bg-white rounded-xl shadow-xl space-y-6">
                    <svg class="h-12 w-12 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <blockquote class="text-lg sm:text-xl font-medium leading-relaxed text-gray-700">
                        "As our first experience with web development, branding, and UI/UX design, Lemontree made the
                        process incredibly smooth..."
                    </blockquote>
                    <div>
                        <div class="text-lg font-semibold text-gray-900">Shadi & Jad, Munchiz</div>
                        <div class="text-sm text-gray-500">Canada</div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="sticky top-0 z-[3] pointer-events-none">
                <div class="w-full max-w-5xl p-8 bg-white rounded-xl shadow-xl space-y-6">
                    <svg class="h-12 w-12 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <blockquote class="text-lg sm:text-xl font-medium leading-relaxed text-gray-700">
                        "As our first experience with web development, branding, and UI/UX design, Lemontree made the
                        process incredibly smooth..."
                    </blockquote>
                    <div>
                        <div class="text-lg font-semibold text-gray-900">Shadi & Jad, Munchiz</div>
                        <div class="text-sm text-gray-500">Canada</div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class=" sticky top-0 z-[4] pb-36 pointer-events-none" style="top: 0;">
                <div class="w-full max-w-5xl p-8 bg-white rounded-xl shadow-xl space-y-6 ">
                    <svg class="h-12 w-12 text-red-500" fill="currentColor" viewBox="0 0 24 24 ">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <blockquote class="text-lg sm:text-xl font-medium leading-relaxed text-gray-700">
                        "As our first experience with web development, branding, and UI/UX design, Lemontree made the
                        process incredibly smooth..."
                    </blockquote>
                    <div>
                        <div class="text-lg font-semibold text-gray-900">Shadi & Jad, Munchiz</div>
                        <div class="text-sm text-gray-500">Canada</div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Optional: Progress indicator -->
    <div class="bg-black py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-white mb-6">Awards & Recognition</h2>

                <!-- Star Ratings -->
                <div class="flex justify-center gap-1">
                    <!-- Star 1 -->
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <!-- Star 2 -->
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <!-- Star 3 -->
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <!-- Star 4 -->
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <!-- Star 5 -->
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
            </div>

            <!-- Awards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-0"> <!-- Changed gap-2 lg:gap-0 to gap-0 -->
                <!-- Award 1 -->
                <div class="mb-6 p-4 flex justify-center rounded-lg">
                    <img src="asset/image/award1.webp" alt="DesignBush Top Branding Agencies Award"
                        class="w-40 h-40 object-contain" loading="lazy">
                </div>

                <!-- Award 2 -->
                <div class="mb-6 p-4 flex justify-center rounded-lg">
                    <img src="asset/image/award2.svg" alt="Awwwards Nominee Badge" class="w-40 h-40 object-contain"
                        loading="lazy">
                </div>
            </div>
        </div>
    </div>

    {{-- FAQS --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 md:py-12 lg:py-16 overflow-visible">
        <!-- FAQ Section -->
        <section class="space-y-4 md:space-y-8 lg:space-y-10">
            <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-gray-800 mb-4 md:mb-8 lg:mb-10 text-start"
                data-aos="lg:fade-left">
                FAQ
            </h1>

            <!-- FAQ Items Container -->
            <div class="space-y-0 divide-y divide-gray-200">
                <!-- FAQ Item 1 -->
                <div class="transition-all duration-300 hover:bg-gray-50/50">
                    <div class="p-4 sm:p-6 md:p-7 lg:p-8" data-aos="lg:fade-up">
                        <h2 class="text-lg sm:text-2xl md:text-3xl lg:text-4xl font-semibold text-gray-800 mb-2 md:mb-4">
                            How long does it take to build a website?
                        </h2>
                        <p class="text-gray-600 text-sm sm:text-lg md:text-xl lg:text-2xl leading-relaxed">
                            The timeline depends on the project size and complexity, but most websites take 4–8 weeks from
                            start to finish. We'll give you a detailed timeline upfront, so you'll always know what's
                            happening
                            and when to expect delivery.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="transition-all duration-300 hover:bg-gray-50/50">
                    <div class="p-4 sm:p-6 md:p-7 lg:p-8" data-aos="lg:fade-left">
                        <h2 class="text-lg sm:text-2xl md:text-3xl lg:text-4xl font-semibold text-gray-800 mb-2 md:mb-4">
                            What's included in your web design package?
                        </h2>
                        <p class="text-gray-600 text-sm sm:text-lg md:text-xl lg:text-2xl leading-relaxed">
                            Our comprehensive package includes custom design, responsive development, SEO optimization,
                            content integration, and training. We also provide ongoing support after launch.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="transition-all duration-300 hover:bg-gray-50/50">
                    <div class="p-4 sm:p-6 md:p-7 lg:p-8" data-aos="lg:fade-up">
                        <h2 class="text-lg sm:text-2xl md:text-3xl lg:text-4xl font-semibold text-gray-800 mb-2 md:mb-4">
                            Do you provide hosting and domain services?
                        </h2>
                        <p class="text-gray-600 text-sm sm:text-lg md:text-xl lg:text-2xl leading-relaxed">
                            Yes, we can handle all aspects of your online presence including domain registration,
                            premium hosting setup, email configuration, and ongoing maintenance.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="transition-all duration-300 hover:bg-gray-50/50">
                    <div class="p-4 sm:p-6 md:p-7 lg:p-8">
                        <h2 class="text-lg sm:text-2xl md:text-3xl lg:text-4xl font-semibold text-gray-800 mb-2 md:mb-4">
                            Can I update the website content myself?
                        </h2>
                        <p class="text-gray-600 text-sm sm:text-lg md:text-xl lg:text-2xl leading-relaxed">
                            Absolutely! We build all our websites with user-friendly CMS systems and provide
                            training so you can easily update content whenever you need to.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- FROM button --}}
    <div class="bg-black py-16 px-4 sm:px-4">
        <div class="max-w-9xl mx-auto">
            <!-- Section Title -->
            <h1 id="ourWorkTitle"
                class="text-center text-white font-extrabold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl mb-8 transition-all duration-700 ease-in-out"
                data-aos="zoom-out-up">
                Request a Quote
            </h1>

            <!-- Content Container -->
            <div class="mt-12 space-y-12">
                <!-- CTA Button -->
                <div class="text-center">
                    <button
                        class="inline-flex items-center gap-2 rounded-lg border-2 border-red-500 bg-red-500 px-6 py-4 text-lg font-semibold text-white transition-all hover:bg-transparent hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                        Explore Web Services
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </div>

                <!-- Divider -->
                <div class="relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-600"></div>
                    </div>
                    <div class="relative flex justify-center">
                        <span class="bg-black px-4 text-lg font-medium text-gray-300">Or fill the form below</span>
                    </div>
                </div>

                <!-- Contact Form -->
                <form class="space-y-6">
                    <div>
                        <input type="text" placeholder="Name" required
                            class="w-full rounded-lg  bg-gray-900 p-4 text-lg text-white placeholder-gray-400 focus:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" required
                            class="w-full rounded-lg bg-gray-900 p-4 text-lg text-white placeholder-gray-400 focus:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>
                    <div>
                        <textarea placeholder="Briefly describe your project" rows="4" required
                            class="w-full rounded-lg  bg-gray-900 p-4 text-lg text-white placeholder-gray-400 focus:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-500"></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">


                        <!-- Design & Branding Section -->
                        <div class="mb-10">
                            <h2 class="text-xl font-semibold text-white mb-4 pb-2 border-b border-gray-200">Websites
                            </h2>
                            <div class="grid grid-cols-1  gap-4">
                                <!-- Logo -->
                                <div class="flex items-center space-x-3">
                                    <input type="checkbox" id="logo" name="services[]" value="Logo"
                                        class="h-5 w-5 text-green-600 bg-gray-800 border-gray-600 rounded focus:ring-green-500 focus:ring-2">
                                    <label for="logo" class="text-sm font-medium text-white">Logo</label>
                                </div>

                                <!-- Packaging -->
                                <div class="flex items-center space-x-3">
                                    <input type="checkbox" id="packaging" name="services[]" value="Packaging"
                                        class="h-5 w-5 text-green-600 bg-gray-800 border-gray-600 rounded focus:ring-green-500 focus:ring-2">
                                    <label for="packaging" class="text-sm font-medium text-white">Packaging</label>
                                </div>

                                <!-- Brandbook -->
                                <div class="flex items-center space-x-3">
                                    <input type="checkbox" id="brandbook" name="services[]" value="Brandbook"
                                        class="h-5 w-5 text-green-600 bg-gray-800 border-gray-600 rounded focus:ring-green-500 focus:ring-2">
                                    <label for="brandbook" class="text-sm font-medium text-white">Brandbook</label>
                                </div>

                                <!-- Other -->
                                <div class="flex items-center space-x-3">
                                    <input type="checkbox" id="other" name="services[]" value="Other"
                                        class="h-5 w-5 text-green-600 bg-gray-800 border-gray-600 rounded focus:ring-green-500 focus:ring-2">
                                    <label for="other" class="text-sm font-medium text-white">Other</label>
                                </div>
                            </div>

                        </div>

                        <!-- Website Details Section -->
                        <div class="mb-10">
                            <h2 class="text-xl font-semibold text-white mb-4 pb-2 border-b border-gray-200">Website Type
                            </h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-white mb-2">Website Size</label>
                                    <select
                                        class="w-full rounded-md border border-gray-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500">
                                        <option>Select an option</option>
                                        <option>None</option>
                                        <option>spotify website</option>
                                        <option>WordPress website</option>
                                        <option>Portfolio website</option>
                                        <option>Small Bussiness website</option>
                                        <option>Coparate website</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-white mb-2">Languages</label>
                                    <select
                                        class="w-full rounded-md border border-gray-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500">
                                        <option>Select an option</option>
                                        <option>Single language</option>
                                        <option>Multilingual</option>
                                        <option>2+ Language</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-white mb-2">Complexity</label>
                                    <select
                                        class="w-full rounded-md border border-gray-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500">
                                        <option>Select an option</option>
                                        <option>None</option>
                                        <option>Simple</option>
                                        <option>Normal</option>
                                        <option>Medium</option>
                                        <option>Complex</option>
                                        <option>I don't Know</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-white mb-2">Website Size</label>
                                    <select
                                        class="w-full rounded-md border border-gray-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500">
                                        <option>Single Page</option>
                                        <option>5< Pages</option>
                                        <option>5-10< Pages</option>
                                        <option>10+ Pages</option>
                                        <option>I don't Know </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Advanced Services Section -->
                        <div class="mb-10">
                            <h2 class="text-xl font-semibold text-white mb-4 pb-2 border-b border-gray-200">Advanced
                                Services</h2>
                            <div class="grid grid-cols-1 gap-4">
                                <div class="flex items-center">
                                    <input id="app-dev" name="services" type="checkbox"
                                        class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                                    <label for="app-dev" class="ml-3 block text-sm font-medium text-white">App
                                        development</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="ai-auto" name="services" type="checkbox"
                                        class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                                    <label for="ai-auto" class="ml-3 block text-sm font-medium text-white">AI
                                        Automation</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="api-int" name="services" type="checkbox"
                                        class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                                    <label for="api-int" class="ml-3 block text-sm font-medium text-white">API
                                        Integrations</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="seo" name="services" type="checkbox"
                                        class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                                    <label for="seo" class="ml-3 block text-sm font-medium text-white">SEO</label>
                                </div>
                            </div>
                        </div>




                    </div>


                </form>

                <!-- Submit Button -->
                <div class="mt-8 max-w-[400px] mx-auto">
                    <button type="submit"
                        class="w-full items-center flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200">
                        Request Quote
                    </button>
                </div>
            </div>
        </div>
    </div>
<!-- Add this script at the end of your body -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if mobile device (768px is Tailwind's md breakpoint)
            const isMobile = window.innerWidth < 768;

            // Get all elements with data-aos-mobile
            const aosElements = document.querySelectorAll('[data-aos-mobile]');

            aosElements.forEach(element => {
                if (isMobile) {
                    // Remove AOS attributes on mobile
                    element.removeAttribute('data-aos');
                    element.removeAttribute('data-aos-mobile');
                }
            });


        });

        // Optional: Handle window resize
        window.addEventListener('resize', function() {
            const isMobileNow = window.innerWidth < 768;
            const aosElements = document.querySelectorAll('[data-aos]');

            aosElements.forEach(element => {
                if (isMobileNow && element.hasAttribute('data-aos-mobile')) {
                    element.removeAttribute('data-aos');
                } else if (!isMobileNow && element.hasAttribute('data-aos-mobile')) {
                    element.setAttribute('data-aos', element.getAttribute('data-aos-mobile'));
                }
            });
        });

        // fgvhjnktvbhnj tyguhj

        AOS.init({
            once: true,
            duration: 1000
        });

        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('.slide');
            let currentSlide = 0;
            let isScrolling = false;

            const scrollToSlide = (index) => {
                if (isScrolling || index === currentSlide) return;
                isScrolling = true;

                window.scrollTo({
                    top: slides[index].offsetTop,
                    behavior: 'smooth'
                });

                setTimeout(() => {
                    isScrolling = false;
                    currentSlide = index;
                }, 1000);
            };

            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowDown' || e.key === 'ArrowRight') {
                    scrollToSlide(Math.min(currentSlide + 1, slides.length - 1));
                } else if (e.key === 'ArrowUp' || e.key === 'ArrowLeft') {
                    scrollToSlide(Math.max(currentSlide - 1, 0));
                }
            });

            window.addEventListener('scroll', () => {
                if (isScrolling) return;
                const scrollY = window.scrollY;
                slides.forEach((slide, i) => {
                    if (scrollY >= slide.offsetTop && scrollY < slide.offsetTop + slide
                        .offsetHeight) {
                        currentSlide = i;
                    }
                });
            });
        });



        //   rtyunmrtvybunmk

        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });


        // ftgyhujk


        // document.addEventListener('DOMContentLoaded', function() {
        //     const steps = [{
        //             id: 'step1',
        //             bar: 'progress-bar-1',
        //             percent: 'progress-percent-1',
        //             target: 90
        //         },
        //         {
        //             id: 'step2',
        //             bar: 'progress-bar-2',
        //             percent: 'progress-percent-2',
        //             target: 75
        //         },
        //         {
        //             id: 'step3',
        //             bar: 'progress-bar-3',
        //             percent: 'progress-percent-3',
        //             target: 85
        //         },
        //         {
        //             id: 'step4',
        //             bar: 'progress-bar-4',
        //             percent: 'progress-percent-4',
        //             target: 95
        //         }
        //     ];

        //     // Store current progress for each step
        //     const currentProgress = steps.map(() => 0);

        //     function updateProgressBars() {
        //         steps.forEach((step, index) => {
        //             const element = document.getElementById(step.id);
        //             if (!element) return;

        //             const rect = element.getBoundingClientRect();
        //             const windowHeight = window.innerHeight;
        //             const elementTop = rect.top;
        //             const elementHeight = rect.height;

        //             // Calculate visibility percentage (0 to 1)
        //             let visibleRatio = 0;
        //             if (elementTop < windowHeight && elementTop + elementHeight > 0) {
        //                 const visibleHeight = Math.min(windowHeight, elementTop + elementHeight) - Math.max(
        //                     0, elementTop);
        //                 visibleRatio = visibleHeight / elementHeight;
        //             }

        //             // Calculate target progress based on visibility
        //             const targetProgress = Math.min(step.target, Math.floor(visibleRatio * step.target));

        //             // Only update if progress changed
        //             if (targetProgress !== currentProgress[index]) {
        //                 currentProgress[index] = targetProgress;
        //                 document.getElementById(step.bar).style.width = targetProgress + '%';
        //                 document.getElementById(step.percent).textContent = targetProgress + '%';
        //             }
        //         });
        //     }

        //     // Initial update
        //     updateProgressBars();

        //     // Update on scroll
        //     window.addEventListener('scroll', function() {
        //         updateProgressBars();
        //     });

        //     // Update on resize (in case window size changes)
        //     window.addEventListener('resize', function() {
        //         updateProgressBars();
        //     });
        // });



        //    fghjnkml
        const title = document.getElementById('ourWorkTitle');

        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            const triggerPoint = 100;

            if (scrollY > triggerPoint) {
                title.classList.remove('text-6xl', 'top-1/2', '-translate-y-1/2');
                title.classList.add('text-4xl', 'top-4', 'translate-y-0');
            } else {
                title.classList.add('text-6xl', 'top-1/2', '-translate-y-1/2');
                title.classList.remove('text-4xl', 'top-4', 'translate-y-0');
            }
        });
    </script>
@endsection
