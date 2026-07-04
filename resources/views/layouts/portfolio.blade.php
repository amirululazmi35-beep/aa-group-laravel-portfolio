<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-luxury-bg scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Amir') | {{ __('site.home.badge') }} Portfolio</title>
    
    <!-- Meta tags for SEO -->
    <meta name="description" content="{{ __('site.meta.description') }}">
    <meta name="keywords" content="{{ __('site.meta.keywords') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full font-sans antialiased bg-luxury-bg text-text-primary flex flex-col selection:bg-gold-primary selection:text-black">

    <!-- Thin Scroll Progress Bar -->
    <div id="scroll-progress"></div>

    <!-- Noise & Scanline overlays for CRT/Cinematic depth -->
    <div class="noise-overlay"></div>
    <div class="scanlines"></div>

    <!-- Animated background grid -->
    <div class="fixed inset-0 animated-grid pointer-events-none z-0 opacity-40"></div>

    <!-- Premium Glowing Background Elements -->
    <div class="fixed top-[-10%] left-[-10%] w-[50%] h-[50%] rounded-full bg-gold-primary/5 blur-[120px] pointer-events-none z-0 bg-orb-1"></div>
    <div class="fixed bottom-[-10%] right-[-10%] w-[50%] h-[50%] rounded-full bg-blue-accent/5 blur-[120px] pointer-events-none z-0 bg-orb-2"></div>

    <!-- Interactive Mouse Glow -->
    <div id="mouse-glow" class="fixed top-0 left-0 w-[300px] h-[300px] rounded-full bg-gold-primary/3 blur-[120px] pointer-events-none z-10 opacity-70 transition-transform duration-75 ease-out"></div>

    <!-- Header Navigation -->
    <header id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b bg-transparent py-6 border-transparent">
        <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-2.5 group">
                <span class="luxury-shine inline-flex items-center justify-center h-8 w-8 rounded bg-transparent border border-gold-primary/40 font-mono font-bold text-gold-primary text-sm tracking-wider shadow-md shadow-gold-primary/5 group-hover:border-gold-primary transition-colors">AA</span>
                <div>
                    <span class="text-xs font-black tracking-widest text-text-primary block leading-none">AMIR</span>
                    <span class="text-[9px] font-bold uppercase tracking-widest text-gold-primary block mt-0.5 leading-none">AA Group</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-7">
                <a href="{{ url('/') }}" class="relative text-[10px] uppercase tracking-[0.2em] font-sans font-semibold py-1 group transition-colors duration-300 {{ request()->is('/') ? 'text-gold-primary nav-active-glow' : 'text-slate-400 hover:text-white' }}">
                    {{ __('site.nav.home') }}
                    <span class="absolute bottom-0 left-0 h-[1.5px] bg-gold-primary transition-all duration-300 {{ request()->is('/') ? 'nav-active-underline' : 'w-0 group-hover:w-full' }}"></span>
                </a>
                <a href="{{ url('/about') }}" class="relative text-[10px] uppercase tracking-[0.2em] font-sans font-semibold py-1 group transition-colors duration-300 {{ request()->is('about') ? 'text-gold-primary nav-active-glow' : 'text-slate-400 hover:text-white' }}">
                    {{ __('site.nav.about') }}
                    <span class="absolute bottom-0 left-0 h-[1.5px] bg-gold-primary transition-all duration-300 {{ request()->is('about') ? 'nav-active-underline' : 'w-0 group-hover:w-full' }}"></span>
                </a>
                <a href="{{ request()->is('about') ? '#skills' : url('/about#skills') }}" class="relative text-[10px] uppercase tracking-[0.2em] font-sans font-semibold py-1 group transition-colors duration-300 text-slate-400 hover:text-white">
                    {{ __('site.nav.skills') }}
                    <span class="absolute bottom-0 left-0 h-[1.5px] bg-gold-primary transition-all duration-300 w-0 group-hover:w-full"></span>
                </a>
                <a href="{{ url('/services') }}" class="relative text-[10px] uppercase tracking-[0.2em] font-sans font-semibold py-1 group transition-colors duration-300 {{ request()->is('services') ? 'text-gold-primary nav-active-glow' : 'text-slate-400 hover:text-white' }}">
                    {{ __('site.nav.services') }}
                    <span class="absolute bottom-0 left-0 h-[1.5px] bg-gold-primary transition-all duration-300 {{ request()->is('services') ? 'nav-active-underline' : 'w-0 group-hover:w-full' }}"></span>
                </a>
                <a href="{{ url('/projects') }}" class="relative text-[10px] uppercase tracking-[0.2em] font-sans font-semibold py-1 group transition-colors duration-300 {{ request()->is('projects') ? 'text-gold-primary nav-active-glow' : 'text-slate-400 hover:text-white' }}">
                    {{ __('site.nav.projects') }}
                    <span class="absolute bottom-0 left-0 h-[1.5px] bg-gold-primary transition-all duration-300 {{ request()->is('projects') ? 'nav-active-underline' : 'w-0 group-hover:w-full' }}"></span>
                </a>
                <a href="{{ request()->is('projects') ? '#store' : url('/projects#store') }}" class="relative text-[10px] uppercase tracking-[0.2em] font-sans font-semibold py-1 group transition-colors duration-300 text-slate-400 hover:text-white">
                    {{ __('site.nav.store') }}
                    <span class="absolute bottom-0 left-0 h-[1.5px] bg-gold-primary transition-all duration-300 w-0 group-hover:w-full"></span>
                </a>
                <a href="{{ url('/contact') }}" class="relative text-[10px] uppercase tracking-[0.2em] font-sans font-semibold py-1 group transition-colors duration-300 {{ request()->is('contact') ? 'text-gold-primary nav-active-glow' : 'text-slate-400 hover:text-white' }}">
                    {{ __('site.nav.contact') }}
                    <span class="absolute bottom-0 left-0 h-[1.5px] bg-gold-primary transition-all duration-300 {{ request()->is('contact') ? 'nav-active-underline' : 'w-0 group-hover:w-full' }}"></span>
                </a>

                <!-- Premium Desktop Language Switcher -->
                <div class="flex items-center gap-2 border-l border-surface-soft/80 pl-4 h-4 ml-2 select-none">
                    <a href="{{ url('/lang/ms') }}" class="text-[9px] font-bold uppercase tracking-wider transition-colors {{ App::getLocale() === 'ms' ? 'text-gold-primary font-bold' : 'text-slate-400 hover:text-white' }}">BM</a>
                    <span class="text-slate-600 text-[9px] select-none">|</span>
                    <a href="{{ url('/lang/en') }}" class="text-[9px] font-bold uppercase tracking-wider transition-colors {{ App::getLocale() === 'en' ? 'text-gold-primary font-bold' : 'text-slate-400 hover:text-white' }}">EN</a>
                </div>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="https://wa.me/601118715341?text=Hi%20Amir%2C%20saya%20berminat%20untuk%20tahu%20lebih%20lanjut%20tentang%20servis%20AA%20Group." target="_blank" rel="noopener noreferrer" class="btn-sweep-gold inline-flex items-center gap-1.5 px-4 py-2 text-[10px] font-bold uppercase tracking-widest text-gold-primary border border-gold-primary/40 rounded bg-transparent hover:bg-gold-primary hover:text-black hover:border-gold-primary transition-all duration-300">
                    {{ __('site.nav.inquire') }}
                    <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-toggle" class="md:hidden p-2 text-slate-400 hover:text-white focus:outline-none transition-colors">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Mobile Nav Menu Panel -->
        <div id="mobile-menu" class="md:hidden bg-luxury-bg/95 backdrop-blur-xl border-surface-soft/80 px-6 space-y-4 shadow-2xl">
            <a href="{{ url('/') }}" class="block text-xs font-bold uppercase tracking-widest transition-colors {{ request()->is('/') ? 'text-gold-primary nav-active-glow' : 'text-slate-300' }}">{{ __('site.nav.home') }}</a>
            <a href="{{ url('/about') }}" class="block text-xs font-bold uppercase tracking-widest transition-colors {{ request()->is('about') ? 'text-gold-primary nav-active-glow' : 'text-slate-300' }}">{{ __('site.nav.about') }}</a>
            <a href="{{ request()->is('about') ? '#skills' : url('/about#skills') }}" class="block text-xs font-bold uppercase tracking-widest transition-colors text-slate-300">{{ __('site.nav.skills') }}</a>
            <a href="{{ url('/services') }}" class="block text-xs font-bold uppercase tracking-widest transition-colors {{ request()->is('services') ? 'text-gold-primary nav-active-glow' : 'text-slate-300' }}">{{ __('site.nav.services') }}</a>
            <a href="{{ url('/projects') }}" class="block text-xs font-bold uppercase tracking-widest transition-colors {{ request()->is('projects') ? 'text-gold-primary nav-active-glow' : 'text-slate-300' }}">{{ __('site.nav.projects') }}</a>
            <a href="{{ request()->is('projects') ? '#store' : url('/projects#store') }}" class="block text-xs font-bold uppercase tracking-widest transition-colors text-slate-300">{{ __('site.nav.store') }}</a>
            <a href="{{ url('/contact') }}" class="block text-xs font-bold uppercase tracking-widest transition-colors {{ request()->is('contact') ? 'text-gold-primary nav-active-glow' : 'text-slate-300' }}">{{ __('site.nav.contact') }}</a>
            <a href="https://wa.me/601118715341?text=Hi%20Amir%2C%20saya%20berminat%20untuk%20tahu%20lebih%20lanjut%20tentang%20servis%20AA%20Group." target="_blank" rel="noopener noreferrer" class="btn-sweep-gold w-full text-center block px-4 py-2.5 text-[10px] font-bold uppercase tracking-widest text-gold-primary border border-gold-primary/40 rounded bg-transparent hover:bg-gold-primary hover:text-black hover:border-gold-primary transition-all duration-300">{{ __('site.nav.inquire') }}</a>
            
            <!-- Premium Mobile Language Switcher -->
            <div class="flex items-center gap-4 pt-4 border-t border-surface-soft/40 pb-2 select-none">
                <span class="text-[10px] uppercase tracking-widest text-slate-400">{{ __('site.nav.language') }}:</span>
                <a href="{{ url('/lang/ms') }}" class="text-xs uppercase tracking-widest font-bold {{ App::getLocale() === 'ms' ? 'text-gold-primary' : 'text-slate-300 hover:text-white' }}">BM</a>
                <span class="text-slate-600 select-none">|</span>
                <a href="{{ url('/lang/en') }}" class="text-xs uppercase tracking-widest font-bold {{ App::getLocale() === 'en' ? 'text-gold-primary' : 'text-slate-300 hover:text-white' }}">EN</a>
            </div>
        </div>
    </header>

    <!-- Main Content Panel -->
    <main class="flex-grow z-10 relative">
        @yield('content')
    </main>

    <!-- Footer Copyright -->
    <footer class="bg-luxury-bg border-t border-surface-soft/80 shrink-0 z-10 relative">
        <div class="max-w-7xl mx-auto px-6 py-12 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-2.5">
                <span class="luxury-shine inline-flex items-center justify-center h-7 w-7 rounded bg-transparent border border-gold-primary/40 font-mono font-bold text-gold-primary text-xs tracking-wider">AA</span>
                <div>
                    <span class="text-xs font-bold text-text-primary block uppercase tracking-widest">AA GROUP</span>
                    <span class="text-[9px] text-text-secondary block leading-none">{{ __('site.footer.platform') }} &copy; {{ date('Y') }}</span>
                </div>
            </div>
            
            <div class="flex flex-wrap justify-center gap-6">
                <a href="{{ url('/about') }}" class="text-[10px] font-bold uppercase tracking-wider text-text-secondary hover:text-gold-primary transition-colors">{{ __('site.nav.about') }}</a>
                <a href="{{ request()->is('about') ? '#skills' : url('/about#skills') }}" class="text-[10px] font-bold uppercase tracking-wider text-text-secondary hover:text-gold-primary transition-colors">{{ __('site.nav.skills') }}</a>
                <a href="{{ url('/services') }}" class="text-[10px] font-bold uppercase tracking-wider text-text-secondary hover:text-gold-primary transition-colors">{{ __('site.nav.services') }}</a>
                <a href="{{ url('/projects') }}" class="text-[10px] font-bold uppercase tracking-wider text-text-secondary hover:text-gold-primary transition-colors">{{ __('site.nav.projects') }}</a>
                <a href="{{ request()->is('projects') ? '#store' : url('/projects#store') }}" class="text-[10px] font-bold uppercase tracking-wider text-text-secondary hover:text-gold-primary transition-colors">{{ __('site.nav.store') }}</a>
                <a href="{{ url('/contact') }}" class="text-[10px] font-bold uppercase tracking-wider text-text-secondary hover:text-gold-primary transition-colors">{{ __('site.nav.contact') }}</a>
            </div>

            <div class="text-[10px] font-bold uppercase tracking-wider text-text-secondary">
                {{ __('site.footer.designed_developed') }} <span class="text-gold-primary">AA GROUP</span>.
            </div>
        </div>
    </footer>

    <!-- Script to toggle mobile sidebar -->
    <script>
        document.getElementById('mobile-menu-toggle')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('open');
        });
    </script>
</body>
</html>
