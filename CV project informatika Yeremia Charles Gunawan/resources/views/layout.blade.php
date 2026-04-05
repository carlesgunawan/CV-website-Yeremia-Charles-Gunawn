<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Charles Gunawan - Personal Branding' }}</title>
    <!-- Vite for Laravel asset management -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- CDN for immediate TailwindCSS support if Vite is not running -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'fitness-red': '#ef4444',
                        'fitness-black': '#0a0a0a',
                        'fitness-gray': '#1f2937',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0a0a0a;
            color: #ffffff;
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-fitness-black text-white selection:bg-fitness-red selection:text-white">
    <!-- Navigation Header -->
    <nav class="fixed top-0 w-full bg-fitness-black/80 backdrop-blur-lg z-50 border-b border-fitness-gray">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="text-3xl font-black text-fitness-red tracking-tighter italic">
                        CG<span class="text-white">.</span>
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-10">
                        <a href="{{ route('home') }}" class="hover:text-fitness-red text-sm font-bold uppercase tracking-widest transition-colors {{ Request::routeIs('home') ? 'text-fitness-red' : 'text-gray-400' }}">Home</a>
                        <a href="{{ route('home') }}#about" class="hover:text-fitness-red text-sm font-bold uppercase tracking-widest transition-colors text-gray-400">About Me</a>
                        @if(Request::routeIs('home'))
                            <a href="#experience" class="hover:text-fitness-red text-sm font-bold uppercase tracking-widest transition-colors text-gray-400">Experience</a>
                        @else
                            <a href="{{ route('skills') }}#skills" class="hover:text-fitness-red text-sm font-bold uppercase tracking-widest transition-colors text-gray-400">Skills</a>
                            <a href="{{ route('skills') }}#projects" class="hover:text-fitness-red text-sm font-bold uppercase tracking-widest transition-colors text-gray-400">Projects</a>
                        @endif
                        <a href="#contact" class="hover:text-fitness-red text-sm font-bold uppercase tracking-widest transition-colors text-gray-400">Contact</a>
                    </div>
                </div>

                <!-- Mobile Button (Simplified) -->
                <div class="md:hidden">
                    <button class="text-gray-400 hover:text-white">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer id="contact" class="bg-neutral-950 py-20 border-t border-gray-900 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h2 class="text-4xl font-black uppercase italic leading-tight">
                        Waktunya <span class="text-red-600">Berubah</span> Sekarang.
                    </h2>
                    <p class="text-gray-400 text-lg max-w-md">
                        Siap untuk memulai perjalanan kebugaran Anda? Hubungi saya untuk diskusi atau kolaborasi lebih lanjut.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <p class="text-xs font-bold text-red-600 uppercase tracking-widest">Email Saya</p>
                        <a href="mailto:{{ $email ?? 'gunawancarles50@email.com' }}" class="text-xl font-bold hover:text-red-500 transition-colors block">
                            {{ $email ?? 'gunawncarles50@email.com' }}
                        </a>
                    </div>
                    <div class="space-y-2">
                        <p class="text-xs font-bold text-red-600 uppercase tracking-widest">Instagram</p>
                        <a href="https://instagram.com/{{ $instagram ?? 'charles__gunawan' }}" target="_blank" class="text-xl font-bold hover:text-red-500 transition-colors block">
                            @ {{ $instagram ?? 'charles__gunawan' }}
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mt-20 pt-10 border-t border-gray-900 flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="text-3xl font-black italic text-gray-800">CG.</div>
                <p class="text-gray-600 text-sm font-medium">
                    © 2026 Charles Gunawan | {{ $footer_tagline ?? 'Stay Strong 💥' }}
                </p>
                <div class="flex space-x-6">
                    <span class="text-red-600 animate-pulse text-xl">💪</span>
                    <span class="text-red-600 animate-pulse text-xl">🔥</span>
                    <span class="text-red-600 animate-pulse text-xl">🏋️</span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
