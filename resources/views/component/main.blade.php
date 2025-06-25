<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Victory Groups - Think out of the box.</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'lemongreen': '#8BC34A',
                        'lemondark': '#5A9216',
                    }
                }
            }
        }
    </script>
    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Lemon Tree Design Agency - We design, develop, and deliver your vision to the world. Professional branding and web design services.">
        <meta name="keywords" content="design agency, branding, web design, creative studio, Montreal">
        <meta name="author" content="Lemon Tree Design Agency">

        <!-- Open Graph meta tags -->
        <meta property="og:title" content="Lemon Tree Design Agency">
        <meta property="og:description" content="We design, develop, and deliver your vision to the world">
        <meta property="og:type" content="website">

        <!-- Twitter Card meta tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Lemon Tree Design Agency">
        <meta name="twitter:description" content="We design, develop, and deliver your vision to the world">

        <title>Lemon Tree Design Agency - Creative Design & Development Studio</title>

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Remix Icons -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">

        <link
        href="https://cdn.jsdelivr.net/gh/codeOpacity/op_icons@main/op_icons.all.min.css"
        rel="stylesheet"
      />
        <style>
            /* Custom animations */
            @keyframes fade-in {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes fade-in-up {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fade-in {
                animation: fade-in 1s ease-out;
            }

            .animate-fade-in-up {
                animation: fade-in-up 1s ease-out 0.3s both;
            }

            /* Smooth scrolling */
            html {
                scroll-behavior: smooth;
            }

            /* Custom scrollbar */
            ::-webkit-scrollbar {
                width: 8px;
            }

            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            ::-webkit-scrollbar-thumb {
                background: #888;
                border-radius: 4px;
            }

            ::-webkit-scrollbar-thumb:hover {
                background: #555;
            }

            /* Video responsiveness */
            video {
                object-fit: cover;
            }

            /* Prevent layout shift during loading */
            img, video {
                max-width: 100%;
                height: auto;
            }

            /* Mobile menu backdrop blur effect */
            .backdrop-blur {
                backdrop-filter: blur(8px);
            }

            /* Improved text contrast */
            .text-shadow {
                text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            }

            /* Custom yellow color */
            .bg-lemon {
                background-color: #e33c0a;
            }

            .hover\:bg-lemon-light:hover {
                background-color: #fd7a7a;
            }

            /* Mobile menu positioning */
            .mobile-menu-container {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 90%;
                max-width: 600px;
            }

            @media (min-width: 640px) {
                .mobile-menu-container {
                    max-width: 700px;
                }
            }
        </style>

      <!-- AOS Initialization -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

      <style>
          /* Custom animations */
          @keyframes float1 {
              0%, 100% { transform: translateY(0) translateX(0); }
              50% { transform: translateY(-20px) translateX(10px); }
          }
          @keyframes float2 {
              0%, 100% { transform: translateY(0) translateX(0); }
              50% { transform: translateY(15px) translateX(-15px); }
          }
          @keyframes float3 {
              0%, 100% { transform: translateY(0) translateX(0); }
              50% { transform: translateY(-10px) translateX(-10px); }
          }

          .animate-float1 { animation: float1 8s ease-in-out infinite; }
          .animate-float2 { animation: float2 10s ease-in-out infinite; }
          .animate-float3 { animation: float3 12s ease-in-out infinite; }

          /* Smooth scrolling */
          html {
              scroll-behavior: smooth;
          }

          /* Custom AOS delays */
          [data-aos-delay="100"] {
              transition-delay: 100ms;
          }
          [data-aos-delay="200"] {
              transition-delay: 200ms;
          }
          [data-aos-delay="300"] {
              transition-delay: 300ms;
          }
          [data-aos-delay="400"] {
              transition-delay: 400ms;
          }
          [data-aos-delay="500"] {
              transition-delay: 500ms;
          }
          [data-aos-delay="600"] {
              transition-delay: 600ms;
          }
      </style>

</head>
<body class=" font-sans antialiased">
@include('component.header')

<div class="min-h-screen  flex flex-col">
@yield('content')
</div>
@include('component.footer')
</body>
</html>
