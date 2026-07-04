@extends('layouts.portfolio')

@section('title', __('site.nav.services'))

@section('content')
<section class="max-w-6xl mx-auto px-6 pt-40 pb-28 space-y-12 reveal-fade">
    <!-- Header Block -->
    <div class="text-center max-w-xl mx-auto space-y-3">
        <span class="section-label font-bold">
            {{ __('site.services_page.label') }}
        </span>
        <h1 class="font-serif text-4xl sm:text-5xl font-light text-text-primary uppercase tracking-widest leading-tight">{{ __('site.services_page.title') }}</h1>
        <p class="text-text-secondary text-xs md:text-sm font-sans leading-relaxed">{{ __('site.services_page.desc') }}</p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-4">
        <!-- Service 1 (Featured) -->
        <div class="p-8 flex flex-col justify-between h-full min-h-[350px] bg-surface/80 group border relative luxury-card border-gold-primary shadow-[0_0_30px_rgba(200,169,106,0.04)] luxury-card-hover reveal-blur" data-delay="100">
            <span class="absolute top-0 right-6 -translate-y-1/2 text-[8px] uppercase tracking-widest bg-gold-primary text-black px-2.5 py-0.5 font-bold font-sans luxury-shine whitespace-nowrap border border-gold-primary/20 shadow-sm">
                {{ __('site.services_page.featured') }}
            </span>
            <div>
                <!-- Icon -->
                <div class="w-12 h-12 flex items-center justify-center bg-luxury-bg border border-gold-primary text-gold-primary transition-all duration-300 mb-6">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 000 20M12 2a14.5 14.5 0 010 20M2 12h20"/></svg>
                </div>
                <!-- Title -->
                <h3 class="font-serif text-2xl font-light text-text-primary mb-3 group-hover:text-gold-light transition-colors duration-300 uppercase">
                    {{ __('site.services_page.items.web.title') }}
                </h3>
                <!-- Description -->
                <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal mb-6">
                    {{ __('site.services_page.items.web.desc') }}
                </p>
            </div>
            <div class="space-y-4">
                <div class="flex flex-wrap gap-1.5 pt-2">
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Laravel</span>
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Tailwind v4</span>
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">SEO Opt</span>
                </div>
                <a href="https://wa.me/601118715341?text=Hi%20Amir%2C%20saya%20berminat%20dengan%20servis%20website%20development%20AA%20Group." target="_blank" rel="noopener noreferrer" class="btn-sweep-gold inline-flex items-center justify-center px-4 py-2 text-[9px] uppercase tracking-widest text-gold-primary hover:text-gold-light font-bold transition-colors duration-300 w-full cursor-pointer mt-2 min-h-[38px] border border-border-gold/30">
                    {{ __('site.buttons.book_consultation') }}
                </a>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="p-8 flex flex-col justify-between h-full min-h-[350px] bg-surface/80 group border relative luxury-card border-surface-soft hover:border-gold-primary/30 transition-all duration-500 luxury-card-hover reveal-blur" data-delay="200">
            <div>
                <!-- Icon -->
                <div class="w-12 h-12 flex items-center justify-center bg-luxury-bg border border-surface-soft text-text-secondary group-hover:text-gold-primary group-hover:border-gold-primary/30 transition-all duration-300 mb-6">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <!-- Title -->
                <h3 class="font-serif text-2xl font-light text-text-primary mb-3 group-hover:text-gold-light transition-colors duration-300 uppercase">
                    {{ __('site.services_page.items.uiux.title') }}
                </h3>
                <!-- Description -->
                <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal mb-6">
                    {{ __('site.services_page.items.uiux.desc') }}
                </p>
            </div>
            <div class="space-y-4">
                <div class="flex flex-wrap gap-1.5 pt-2">
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Figma</span>
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Mockups</span>
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Layouts</span>
                </div>
                <a href="https://wa.me/601118715341?text=Hi%20Amir%2C%20saya%20berminat%20dengan%20servis%20design%20%26%20branding%20AA%20Group." target="_blank" rel="noopener noreferrer" class="btn-sweep-gold inline-flex items-center justify-center px-4 py-2 text-[9px] uppercase tracking-widest text-gold-primary hover:text-gold-light font-bold transition-colors duration-300 w-full cursor-pointer mt-2 min-h-[38px] border border-border-gold/30">
                    {{ __('site.buttons.book_consultation') }}
                </a>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="p-8 flex flex-col justify-between h-full min-h-[350px] bg-surface/80 group border relative luxury-card border-surface-soft hover:border-gold-primary/30 transition-all duration-500 luxury-card-hover reveal-blur" data-delay="300">
            <div>
                <!-- Icon -->
                <div class="w-12 h-12 flex items-center justify-center bg-luxury-bg border border-surface-soft text-text-secondary group-hover:text-gold-primary group-hover:border-gold-primary/30 transition-all duration-300 mb-6">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122A3 3 0 0010.5 21c.966 0 1.838-.46 2.39-1.173m-3.36-3.705A3.978 3.978 0 019 15c0-1.892 1.33-3.474 3.125-3.875M12 3a9 9 0 100 18 9 9 0 000-18z"/></svg>
                </div>
                <!-- Title -->
                <h3 class="font-serif text-2xl font-light text-text-primary mb-3 group-hover:text-gold-light transition-colors duration-300 uppercase">
                    {{ __('site.services_page.items.graphic.title') }}
                </h3>
                <!-- Description -->
                <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal mb-6">
                    {{ __('site.services_page.items.graphic.desc') }}
                </p>
            </div>
            <div class="space-y-4">
                <div class="flex flex-wrap gap-1.5 pt-2">
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Illustrator</span>
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Logos</span>
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Banners</span>
                </div>
                <a href="https://wa.me/601118715341?text=Hi%20Amir%2C%20saya%20berminat%20dengan%20servis%20design%20%26%20branding%20AA%20Group." target="_blank" rel="noopener noreferrer" class="btn-sweep-gold inline-flex items-center justify-center px-4 py-2 text-[9px] uppercase tracking-widest text-gold-primary hover:text-gold-light font-bold transition-colors duration-300 w-full cursor-pointer mt-2 min-h-[38px] border border-border-gold/30">
                    {{ __('site.buttons.book_consultation') }}
                </a>
            </div>
        </div>

        <!-- Service 4 (Featured) -->
        <div class="p-8 flex flex-col justify-between h-full min-h-[350px] bg-surface/80 group border relative luxury-card border-gold-primary shadow-[0_0_30px_rgba(200,169,106,0.04)] luxury-card-blue reveal-blur" data-delay="400">
            <span class="absolute top-0 right-6 -translate-y-1/2 text-[8px] uppercase tracking-widest bg-gold-primary text-black px-2.5 py-0.5 font-bold font-sans luxury-shine whitespace-nowrap border border-gold-primary/20 shadow-sm">
                {{ __('site.services_page.featured') }}
            </span>
            <div>
                <!-- Icon -->
                <div class="w-12 h-12 flex items-center justify-center bg-luxury-bg border border-gold-primary text-gold-primary transition-all duration-300 mb-6">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9.813 15.904L9 21l8.95-6.262H21V3H3v12.904h6.813z"/></svg>
                </div>
                <!-- Title -->
                <h3 class="font-serif text-2xl font-light text-text-primary mb-3 group-hover:text-gold-light transition-colors duration-300 uppercase">
                    {!! __('site.services_page.items.ai.title') !!}
                </h3>
                <!-- Description -->
                <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal mb-6">
                    {{ __('site.services_page.items.ai.desc') }}
                </p>
            </div>
            <div class="space-y-4">
                <div class="flex flex-wrap gap-1.5 pt-2">
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Gemini API</span>
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Prompts</span>
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Integrations</span>
                </div>
                <a href="https://wa.me/601118715341?text=Hi%20Amir%2C%20saya%20berminat%20dengan%20servis%20AI%20solutions%20AA%20Group." target="_blank" rel="noopener noreferrer" class="btn-sweep-gold inline-flex items-center justify-center px-4 py-2 text-[9px] uppercase tracking-widest text-gold-primary hover:text-gold-light font-bold transition-colors duration-300 w-full cursor-pointer mt-2 min-h-[38px] border border-border-gold/30">
                    {{ __('site.buttons.book_consultation') }}
                </a>
            </div>
        </div>

        <!-- Service 5 (Featured) -->
        <div class="p-8 flex flex-col justify-between h-full min-h-[350px] bg-surface/80 group border relative luxury-card border-gold-primary shadow-[0_0_30px_rgba(200,169,106,0.04)] luxury-card-blue reveal-blur" data-delay="500">
            <span class="absolute top-0 right-6 -translate-y-1/2 text-[8px] uppercase tracking-widest bg-gold-primary text-black px-2.5 py-0.5 font-bold font-sans luxury-shine whitespace-nowrap border border-gold-primary/20 shadow-sm">
                {{ __('site.services_page.featured') }}
            </span>
            <div>
                <!-- Icon -->
                <div class="w-12 h-12 flex items-center justify-center bg-luxury-bg border border-gold-primary text-gold-primary transition-all duration-300 mb-6">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 17l6-6-6-6M12 19h8"/></svg>
                </div>
                <!-- Title -->
                <h3 class="font-serif text-2xl font-light text-text-primary mb-3 group-hover:text-gold-light transition-colors duration-300 uppercase">
                    {!! __('site.services_page.items.bot.title') !!}
                </h3>
                <!-- Description -->
                <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal mb-6">
                    {{ __('site.services_page.items.bot.desc') }}
                </p>
            </div>
            <div class="space-y-4">
                <div class="flex flex-wrap gap-1.5 pt-2">
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Python</span>
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Telebot</span>
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Webhooks</span>
                </div>
                <a href="https://wa.me/601118715341?text=Hi%20Amir%2C%20saya%20berminat%20dengan%20servis%20AI%20solutions%20AA%20Group." target="_blank" rel="noopener noreferrer" class="btn-sweep-gold inline-flex items-center justify-center px-4 py-2 text-[9px] uppercase tracking-widest text-gold-primary hover:text-gold-light font-bold transition-colors duration-300 w-full cursor-pointer mt-2 min-h-[38px] border border-border-gold/30">
                    {{ __('site.buttons.book_consultation') }}
                </a>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="p-8 flex flex-col justify-between h-full min-h-[350px] bg-surface/80 group border relative luxury-card border-surface-soft hover:border-gold-primary/30 transition-all duration-500 luxury-card-hover reveal-blur" data-delay="600">
            <div>
                <!-- Icon -->
                <div class="w-12 h-12 flex items-center justify-center bg-luxury-bg border border-surface-soft text-text-secondary group-hover:text-gold-primary group-hover:border-gold-primary/30 transition-all duration-300 mb-6">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <!-- Title -->
                <h3 class="font-serif text-2xl font-light text-text-primary mb-3 group-hover:text-gold-light transition-colors duration-300 uppercase">
                    {{ __('site.services_page.items.strategy.title') }}
                </h3>
                <!-- Description -->
                <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal mb-6">
                    {{ __('site.services_page.items.strategy.desc') }}
                </p>
            </div>
            <div class="space-y-4">
                <div class="flex flex-wrap gap-1.5 pt-2">
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">SaaS</span>
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Stripe</span>
                    <span class="tag-pill border border-surface-soft text-text-secondary/70 text-[8px] py-0.5 px-1.5">Licensing</span>
                </div>
                <a href="https://wa.me/601118715341?text=Hi%20Amir%2C%20saya%20berminat%20dengan%20servis%20AA%20Group." target="_blank" rel="noopener noreferrer" class="btn-sweep-gold inline-flex items-center justify-center px-4 py-2 text-[9px] uppercase tracking-widest text-gold-primary hover:text-gold-light font-bold transition-colors duration-300 w-full cursor-pointer mt-2 min-h-[38px] border border-border-gold/30">
                    {{ __('site.buttons.book_consultation') }}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
