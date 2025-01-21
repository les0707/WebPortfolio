<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    @vite('resources/css/app.css')
    <style>
        /* Navbar slide-down animation */
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animate-slide-down {
            animation: slideDown 0.8s ease-out;
        }

        body {
            background: url('{{ asset("images/BGGIF.gif") }}') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="sticky top-0 bg-white shadow-md">
        <div class="flex justify-between items-center px-6 py-4">
            <div class="text-2xl font-bold">About Me</div>
            <!-- Hamburger Icon -->
            <button id="menu-toggle" class="block md:hidden focus:outline-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
            <!-- Links -->
            <div id="menu" class="hidden md:flex space-x-6">
                <a href="#" class="text-black font-semibold hover:text-gray-600 relative group">
                    Home
                    <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-black transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-black font-semibold hover:text-gray-600 relative group">
                    Pricing
                    <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-black transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-black font-semibold hover:text-gray-600 relative group">
                    Features
                    <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-black transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-black font-semibold hover:text-gray-600 relative group">
                    Docs
                    <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-black transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="text-black font-semibold hover:text-gray-600 relative group">
                    Blog
                    <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-black transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>
        </div>
        <!-- Mobile Links -->
        <div id="mobile-menu" class="hidden flex-col space-y-2 px-6 py-4 md:hidden bg-white border-t border-gray-200">
            <a href="#" class="text-black font-semibold hover:text-gray-600">Home</a>
            <a href="#" class="text-black font-semibold hover:text-gray-600">Pricing</a>
            <a href="#" class="text-black font-semibold hover:text-gray-600">Features</a>
            <a href="#" class="text-black font-semibold hover:text-gray-600">Docs</a>
            <a href="#" class="text-black font-semibold hover:text-gray-600">Blog</a>
        </div>
    </nav>

    <section id="about-me" class="h-screen w-full flex items-center justify-center">
        <div class="container flex mx-auto py-10 max-w-2xl min-h-fit">
            <div class="bg-white p-8 rounded-lg shadow-md flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 w-full flex justify-center md:justify-start">
                    <img src="{{ asset('images/user.png') }}" alt="Profile Picture" class="w-32 h-32 md:w-auto md:h-auto rounded-lg">
                </div>
                <div class="md:w-1/2 w-full mt-4 md:mt-0">
                    <h1 class="text-3xl font-bold mb-4 text-center md:text-left">About Me</h1>
                    <p class="text-lg leading-relaxed text-center md:text-left">
                        Hi, I'm Leigh, a passionate web developer specializing in backend development. 
                        Welcome to my Website!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="h-screen w-full flex items-center justify-center" style="background-image: url('{{ asset('images/BG1.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container mx-auto py-10 max-w-6xl">
            <h1 class="text-3xl font-bold text-center text-black">Full Stack Web Developer</h1>
            <p class="text-center mb-4 text-black ext-slate-700 dark:text-slate-500">
                2024 - 2025
            </p>
            <p class="text-lg leading-relaxed text-center text-black">
                Hi, I'm Leigh, a passionate Full Stack Web Developer with expertise in both frontend and backend development. 
                I have a strong foundation in HTML, CSS, JavaScript, and PHP, and I am proficient in frameworks such as Laravel and Vue.js. 
                I enjoy creating seamless user experiences and robust server-side applications. 
                My goal is to build functional, efficient, and visually appealing web applications that solve real-world problems. 
                Let's collaborate and bring your ideas to life!
            </p>
        </div>
    </section>

    <script>
        // Hamburger menu toggle
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
