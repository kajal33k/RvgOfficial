   <!-- Navigation -->
   <header class="flex justify-center px-4 sm:px-6 pt-6 sticky top-0 z-50 transition-all duration-300" id="main-header">
    <nav class="w-full max-w-5xl bg-white rounded-full shadow-xl transition-all duration-300" aria-label="Main navigation">
        <div class="flex justify-between items-center px-6 py-1">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" aria-label="Lemon Tree Design Agency Home"
                    class="focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-black rounded-full block">
                    <div class="text-white font-bold text-xl md:text-2xl flex items-center gap-2">
                        <div class="flex-shrink-0">
                            <a href="/" aria-label="Lemon Tree Design Agency Home"
                               class="focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-black rounded-full block w-[180px] md:w-[240px] lg:w-[280px]">
                                <img src="{{ asset('asset/image/logo-w.png') }}"
                                     alt="Lemon Tree Design Agency Logo"
                                     class="w-full h-28 transition-all duration-300 hover:opacity-90"
                                     width="456" height="40" loading="lazy" decoding="async">
                            </a>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="">
                <button id="mobile-menu-button"
                    class="text-white p-2 rounded-full hover:bg-gray-50 text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-white transition"
                    aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-menu">
                    <i class="ri-menu-line text-2xl text-black bg-white" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </nav>
</header>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden fixed inset-0 z-50 bg-black lg:mx-80 max-w-full mx-8  md:max-w-3xl  lg:my-40 my-28 px-2 flex items-center justify-center transition-all duration-300 rounded-3xl opacity-0 overflow-y-auto"
            aria-modal="true" role="dialog" aria-labelledby="mobileMenuLabel">
            <div class="relative w-full max-w-2xl mx-auto">
                <!-- Services Grid -->
                <nav class="grid grid-cols-1 sm:grid-cols-1 gap-4 " aria-labelledby="mobileMenuLabel">
                    <!-- Branding -->
                    <a href="#branding"
                        class="flex items-center justify-between bg-white hover:bg-white rounded-3xl lg:px-6 lg:py-8 p-4 md:p-6 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 group"
                        aria-label="Explore Branding Services">
                        <h2 class="text-2xl font-bold text-gray-900 group-hover:text-red-600 transition-all">BRANDING</h2>
                        <img src="https://cdn.pixabay.com/photo/2016/12/12/20/16/notebooks-1902570_1280.png" alt="Branding Icon"
                            class="w-16 h-16" loading="lazy">
                    </a>

                    <!-- Web Design -->
                    <a href="#webdesign"
                        class="flex items-center justify-between bg-white hover:bg-white rounded-3xl px-6 py-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 group"
                        aria-label="Explore Web Design Services">
                        <h2 class="text-2xl font-bold text-black group-hover:text-red-600 transition-all">WEB DESIGN</h2>
                        <img src="https://cdn.pixabay.com/photo/2013/07/12/19/05/notebook-154358_1280.png" alt="Web Design Icon"
                            class="w-16 h-16" loading="lazy">
                    </a>

                    <!-- Request A Quote -->
                    <a href="#quote"
                        class="sm:col-span-2 mt-2 flex items-center gap-6 bg-white hover:bg-white rounded-3xl px-6 py-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 group"
                        aria-label="Request a Quote">

                        <!-- Icon -->
                        <img src="https://cdn.pixabay.com/photo/2018/05/19/10/28/envelope-3413133_1280.png" alt="Quote Icon"
                            class="w-16 h-16 flex-shrink-0 object-contain" loading="lazy" />

                        <!-- Heading -->
                        <h2 class="text-2xl font-bold text-black group-hover:text-red-600 transition-all">
                            REQUEST A QUOTE
                        </h2>
                    </a>
                </nav>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                // Initialize AOS
                AOS.init({
                    duration: 800,
                    easing: 'ease-in-out',
                    once: false,
                    mirror: true,
                    offset: 100
                });

                // Mobile menu functionality
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');
                let isMenuOpen = false;

                const toggleMenu = () => {
                    isMenuOpen = !isMenuOpen;

                    if (isMenuOpen) {
                        mobileMenu.classList.remove('hidden');
                        mobileMenu.classList.add('flex');
                        setTimeout(() => {
                            mobileMenu.classList.remove('opacity-0');
                        }, 10);
                        mobileMenuButton.setAttribute('aria-expanded', 'true');
                        document.body.style.overflow = 'hidden';
                        const icon = mobileMenuButton.querySelector('i');
                        icon.classList.remove('ri-menu-line');
                        icon.classList.add('ri-close-line');
                    } else {
                        mobileMenu.classList.add('opacity-0');
                        setTimeout(() => {
                            mobileMenu.classList.add('hidden');
                            mobileMenu.classList.remove('flex');
                        }, 300);
                        mobileMenuButton.setAttribute('aria-expanded', 'false');
                        document.body.style.overflow = '';
                        const icon = mobileMenuButton.querySelector('i');
                        icon.classList.remove('ri-close-line');
                        icon.classList.add('ri-menu-line');
                    }
                };

                mobileMenuButton.addEventListener('click', toggleMenu);
                mobileMenu.addEventListener('click', (e) => {
                    if (e.target === mobileMenu && isMenuOpen) {
                        toggleMenu();
                    }
                });

                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape' && isMenuOpen) {
                        toggleMenu();
                    }
                });

                document.querySelectorAll('#mobile-menu a[href^="#"]').forEach(link => {
                    link.addEventListener('click', (e) => {
                        if (isMenuOpen) {
                            e.preventDefault();
                            toggleMenu();
                            const targetId = link.getAttribute('href').substring(1);
                            const targetElement = document.getElementById(targetId);
                            if (targetElement) {
                                setTimeout(() => {
                                    targetElement.scrollIntoView({
                                        behavior: 'smooth',
                                        block: 'start'
                                    });
                                }, 300);
                            }
                        }
                    });
                });

                // Scroll animations for header and back-to-top button
                const animateOnScroll = () => {
                    // Header shrink effect
                    const header = document.getElementById('main-header');
                    if (window.scrollY > 50) {
                        header.classList.add('py-2');
                        header.querySelector('nav').classList.add('py-2');
                    } else {
                        header.classList.remove('py-2');
                        header.querySelector('nav').classList.remove('py-2');
                    }

                    // Back to top button
                    const backToTopButton = document.getElementById('back-to-top');
                    if (window.scrollY > 300) {
                        backToTopButton.classList.remove('opacity-0', 'invisible', 'translate-y-10');
                    } else {
                        backToTopButton.classList.add('opacity-0', 'invisible', 'translate-y-10');
                    }
                };

                // Back to top button
                document.getElementById('back-to-top').addEventListener('click', () => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });

                // Add scroll event listener
                window.addEventListener('scroll', animateOnScroll);

                // Trigger once on load
                animateOnScroll();

                // Refresh AOS when images are loaded to prevent incorrect calculations
                window.addEventListener('load', () => {
                    AOS.refresh();
                });
            });
        </script>
